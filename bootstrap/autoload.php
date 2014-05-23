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

use Bootstrap\Container\Container;
use Illuminate\Support\Facades\Facade;
use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Events\Dispatcher;

$app = new Container();

$app['config.app'] = include BASE . '/app/config/app.php';
$app['config.database'] = include BASE . '/app/config/database.php';
$app['database.migrations'] = $app['config.database']['migrations'];

$app['events'] = new Dispatcher($app);

$app['app'] = $app;
$app['config'] = $app;

Facade::setFacadeApplication($app);

$app->singleton('db', function () use ($app) {
    $db = new Capsule($app);
    $db->addConnection($app['config.database']['connections'][$app['config.database']['default']]);
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
    if (isset($app['config.app']['aliases'][$className])) {
        $app['db']; //lazy initialization of DB
        return class_alias($app['config.app']['aliases'][$className], $className);
    }
    return false;
}, true, true);