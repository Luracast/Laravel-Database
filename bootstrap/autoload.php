<?php
define('APP_START', microtime(true));
/*
|--------------------------------------------------------------------------
| Register The Composer Auto Loader && Lazy load the DB
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader
| for our application. We just need to utilize it! We'll require it
| into the script here so that we do not have to worry about the
| loading of any our classes "manually". Feels great to relax.
|
*/
define('BASE', dirname(__DIR__));

require BASE . '/vendor/autoload.php';

use Bootstrap\Container\Application;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Facade;
use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Events\Dispatcher;
use Illuminate\Cache\CacheManager;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Str;
use Luracast\Config\Config;


/*
|--------------------------------------------------------------------------
| Some of the commonly expected functions
|--------------------------------------------------------------------------
*/

if (!function_exists('app')) {
    /**
     * Get the available container instance.
     *
     * @param  string $make
     * @param  array $parameters
     *
     * @return mixed|Application
     */
    function app($make = null, $parameters = [])
    {
        if (is_null($make)) {
            return Application::getInstance();
        }

        return Application::getInstance()->make($make, $parameters);
    }
}

if (!function_exists('env')) {
    /**
     * Gets the value of an environment variable. Supports boolean, empty and null.
     *
     * @param  string $key
     * @param  mixed $default
     *
     * @return mixed
     */
    function env($key, $default = null)
    {
        $value = getenv($key);
        if ($value === false) {
            return value($default);
        }
        switch (strtolower($value)) {
            case 'true':
            case '(true)':
                return true;
            case 'false':
            case '(false)':
                return false;
            case 'empty':
            case '(empty)':
                return '';
            case 'null':
            case '(null)':
                return;
        }
        if (strlen($value) > 1 && Str::startsWith($value, '"') && Str::endsWith($value, '"')) {
            return substr($value, 1, -1);
        }

        return $value;
    }
}

if (!function_exists('storage_path')) {
    /**
     * Get the path to the storage folder.
     *
     * @param  string $path
     *
     * @return string
     */
    function storage_path($path = '')
    {
        return app('path.storage') . ($path ? DIRECTORY_SEPARATOR . $path : $path);
    }
}


if (!function_exists('config_path')) {

    function config_path($path = '')
    {
        return BASE . '/app/config' . ($path ? DIRECTORY_SEPARATOR . $path : $path);
    }
}

if (!function_exists('config_path')) {

    function config_path($path = '')
    {
        return BASE . '/app/config' . ($path ? DIRECTORY_SEPARATOR . $path : $path);
    }
}

if (!function_exists('getAppNamespace')) {

    function getAppNamespace()
    {
        $composer = json_decode(file_get_contents(BASE . '/composer.json'), true);
        foreach ((array)data_get($composer, 'autoload.psr-4') as $namespace => $path) {
            foreach ((array)$path as $pathChoice) {
                if (realpath(BASE . '/' . 'bootstrap') == realpath(BASE . '/' . $pathChoice))
                    return $namespace;
            }
        }
        throw new RuntimeException("Unable to detect application namespace.");
    }
}

$app = new Application();

/*
|--------------------------------------------------------------------------
| Detect The Application Environment
|--------------------------------------------------------------------------
|
| Laravel Database takes a dead simple approach to your application environments
| so you can create a .env file from .env.example and specify environment under
| APP_ENV otherwise production is assumed
|
*/
if (file_exists(BASE . '/.env')) {
    Dotenv::load(BASE);
}

$env = $app->detectEnvironment(function () {
    return getenv('APP_ENV') ?: 'development';
});

$app['app'] = $app;
Facade::setFacadeApplication($app);

$app->instance('config', new Config(BASE . '/app/config', $env));

$app->singleton('events', function () use ($app) {
    return new Dispatcher($app);
});

$app->singleton('files', function () use ($app) {
    return new Filesystem();
});

$app->singleton('cache', function () use ($app) {
    return new CacheManager($app);
});

$app->singleton('db', function () use ($app) {
    $config = $app['config'];
    $default = $config['database.default'];
    $fetch = $config['database.fetch'];
    $db = new Capsule($app);
    $config['database.fetch'] = $fetch;
    $config['database.default'] = $default;
    $db->addConnection($config['database.connections'][$default]);
    $db->setEventDispatcher($app['events']);
    $db->setAsGlobal();
    $db->bootEloquent();

    return $db->getDatabaseManager();
});

/*
|--------------------------------------------------------------------------
| Pagination Support
|--------------------------------------------------------------------------
*/
Paginator::currentPathResolver(function () {
    return strtok($_SERVER["REQUEST_URI"], '?');
});

Paginator::currentPageResolver(function ($pageName = 'page') {
    if (isset($_REQUEST[$pageName])) {
        $page = $_REQUEST[$pageName];
        if (filter_var($page, FILTER_VALIDATE_INT) !== false && (int)$page >= 1) {
            return $page;
        }
    }

    return 1;
});

/*
|--------------------------------------------------------------------------
| Redis Support
|--------------------------------------------------------------------------
*/
$app->singleton('redis', function () use ($app) {
    return new Illuminate\Redis\Database($app['config']['database.redis']);
});

/*
|--------------------------------------------------------------------------
| Register The Aliased Auto Loader
|--------------------------------------------------------------------------
|
| We register an auto-loader "before" the Composer loader that can load
| aliased classes with out their namespaces. We'll add it to the stack here.
|
*/

spl_autoload_register(function ($className) use ($app) {
    if (isset($app['config']['app.aliases'][$className])) {
        $app['db']; //lazy initialization of DB
        return class_alias($app['config']['app.aliases'][$className], $className);
    }

    return false;
}, true, true);

/*
|--------------------------------------------------------------------------
| Bind Paths
|--------------------------------------------------------------------------
|
| Here we are binding the paths configured in paths.php to the app. You
| should not be changing these here. If you need to change these you
| may do so within the paths.php file and they will be bound here.
|
*/

$app->bindInstallPaths(require __DIR__ . '/paths.php');
