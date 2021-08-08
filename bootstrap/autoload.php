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
require __DIR__.'/helpers.php';
define('BASE', dirname(__DIR__));
require BASE . '/vendor/autoload.php';

use Bootstrap\Config\Config;
use Bootstrap\Console\PackageManifest;
use Bootstrap\Container\Application;
use Illuminate\Cache\CacheManager;
use Illuminate\Database\Capsule\Manager as Database;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Events\Dispatcher;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Pagination\Paginator;
use Illuminate\Queue\Capsule\Manager as Queue;
use Illuminate\Support\Facades\Facade;
use Luracast\Restler\Defaults;
use Luracast\Restler\Format\HtmlFormat;
use Luracast\Restler\Scope;
use Luracast\Restler\UI\Bootstrap3Form;
use Luracast\Restler\UI\Forms;


$app = new Application(BASE);

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
    $dotenv = Dotenv\Dotenv::createMutable(BASE);
    $dotenv->load();
}

$env = $app->detectEnvironment(getenv('APP_ENV') ?: 'development');

Facade::setFacadeApplication($app);

$app->instance('config', new Config(app('path.config'), $env));

$app->singleton(
    'events',
    function () use ($app) {
        return new Dispatcher($app);
    }
);
$app->singleton(
    \Illuminate\Contracts\Events\Dispatcher::class,
    function () use ($app) {
        return $app['events'];
    }
);

$app->singleton(
    'files',
    function () use ($app) {
        return new Filesystem();
    }
);

$app->singleton(
    'cache',
    function () use ($app) {
        return new CacheManager($app);
    }
);

$app->singleton(PackageManifest::class, function () use ($app) {
    return new PackageManifest(
        new Filesystem, $app->basePath(), $app->getCachedPackagesPath()
    );
});

$app->singleton(
    'db',
    function () use ($app) {
        $config = $app['config'];
        $default = $config['database.default'];
        $fetch = $config['database.fetch'];
        $db = new Database($app);
        $config['database.fetch'] = $fetch;
        $config['database.default'] = $default;
        $db->addConnection($config["database.connections.$default"]);
        $db->setEventDispatcher($app['events']);
        $db->setAsGlobal();
        $db->bootEloquent();

        $db->getDatabaseManager()->extend(
            'mongodb',
            function ($config, $name) {
                $config['name'] = $name;
                return new Jenssegers\Mongodb\Connection($config);
            }
        );
        return $db->getDatabaseManager();
    }
);

$app->singleton(
    'queue',
    function () use ($app) {
        $config = $app['queue'];
        $default = $config['queue.default'];
        $connections = $config['queue.connections'];
        $config['queue.default'] = $default;
        $config['queue.connections'] = $connections;
        $queue = new Queue;
        $queue->addConnection($config['queue.connections'][$default]);
        $queue->setAsGlobal();

        return $queue->getQueueManager();
    }
);

$app->singleton(
    'queue.connection',
    function () use ($app) {
        return $app['queue']->connection();
    }
);

/*
|--------------------------------------------------------------------------
| Pagination Support
|--------------------------------------------------------------------------
*/
Paginator::currentPathResolver(
    function () {
        return strtok($_SERVER["REQUEST_URI"], '?');
    }
);

Paginator::currentPageResolver(
    function ($pageName = 'page') {
        if (isset($_REQUEST[$pageName])) {
            $page = $_REQUEST[$pageName];
            if (filter_var($page, FILTER_VALIDATE_INT) !== false && (int)$page >= 1) {
                return $page;
            }
        }

        return 1;
    }
);

/*
|--------------------------------------------------------------------------
| Redis Support
|--------------------------------------------------------------------------
*/
$app->singleton(
    'redis',
    function () use ($app) {
        return new Illuminate\Redis\Database($app['config']['database.redis']);
    }
);

/*
|--------------------------------------------------------------------------
| Register The Aliased Auto Loader
|--------------------------------------------------------------------------
|
| We register an auto-loader "before" the Composer loader that can load
| aliased classes with out their namespaces. We'll add it to the stack here.
|
*/

spl_autoload_register(
    function ($className) use ($app) {
        if (Model::class === $className) {
            include __DIR__ . '/../vendor/illuminate/database/Eloquent/Model.php';
            $app['db'];
            return true;
        }
        if (Jenssegers\Mongodb\Eloquent\Model::class === $className) {
            //include __DIR__ . '/../vendor/jenssegers/mongodb/src/Jenssegers/Mongodb/Eloquent/Model.php';
            $app['db'];
            return true;
        }
        if (isset($app['config']['app.aliases'][$className])) {
            $app['db']; //lazy initialization of DB
            return class_alias($app['config']['app.aliases'][$className], $className);
        }

        return false;
    },
    true,
    true
);

/*
|--------------------------------------------------------------------------
| Configure Restler to adapt to Laravel structure
|--------------------------------------------------------------------------
*/

//$app['config']['app.aliases'] += Scope::$classAliases + ['Scope' => 'Luracast\Restler\Scope'];
//
//Defaults::$cacheDirectory = $app['config']['cache.path'];
//HtmlFormat::$viewPath = $app['path'] . '/views';
//HtmlFormat::$cacheDirectory = $app['path.storage'] . '/views';
//
//HtmlFormat::$template = 'blade';
////Forms::$style = FormStyles::$bootstrap3; // for v4 and below
//Forms::setStyles(new Bootstrap3Form); // for v5
//
//include BASE . '/routes/api.php';
