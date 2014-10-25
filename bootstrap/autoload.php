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
use Illuminate\Support\Facades\Facade;
use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Events\Dispatcher;
use Illuminate\Cache\CacheManager;
use Illuminate\Filesystem\Filesystem;
use Luracast\Config\Config;


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

$env = $app->detectEnvironment(function()
{
    return getenv('APP_ENV') ?: 'production';
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