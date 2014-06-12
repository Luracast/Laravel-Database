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
use Bootstrap\Container\Config;

$app = new Application();

/*
|--------------------------------------------------------------------------
| Detect The Application Environment
|--------------------------------------------------------------------------
|
| Laravel Database takes a dead simple approach to your application environments
| so you can just specify a machine name for the host that matches a
| given environment, then we will automatically detect it for you.
|
*/

$env = $app->detectEnvironment(array(

    'local' => array('your-machine-name'), //Aruls-MacBook-Pro-2.local

));

$config = Config::init(BASE . '/app/config');

/*
//load environment specific configuration

if (is_readable($file = BASE . '/app/config/' . $app['env'] . '/app.php')) {
    $app['config.app'] = (include $file) + (include BASE . '/app/config/app.php');
} else {
    $app['config.app'] = include BASE . '/app/config/app.php';
}

if (is_readable($file = BASE . '/app/config/' . $app['env'] . '/database.php')) {
    $app['config.database'] = (include $file) + (include BASE . '/app/config/database.php');
} else {
    $app['config.database'] = include BASE . '/app/config/database.php';
}

$app['database.migrations'] = $app['config.database']['migrations'];
*/

$app['events'] = new Dispatcher($app);

$app['app'] = $app;
$app->instance('config', $config);

Facade::setFacadeApplication($app);

$app->singleton('db', function () use ($app, $config) {
    $db = new Capsule($app);
    $db->addConnection($config['database.connections'][$config['database']['default']]);
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