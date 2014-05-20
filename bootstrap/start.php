<?php

use Bootstrap\Console\ExceptionHandler;
use Illuminate\Filesystem\Filesystem;

/*
|--------------------------------------------------------------------------
| Bind Needed Properties
|--------------------------------------------------------------------------
|
| Here we are binding the exception handler and file system
|
*/

$app->singleton('exception', function () use ($app) {
    return new ExceptionHandler();
});

$app->singleton('files', function () use ($app) {
    $files = new Filesystem();
    return $files;
});

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

/*
|--------------------------------------------------------------------------
| Return The Application
|--------------------------------------------------------------------------
|
| This script returns the application instance. The instance is given to
| the calling script so we can separate the building of the instances
| from the actual running of the application and sending responses.
|
*/

return $app;