<?php

use Bootstrap\Console\ExceptionHandler;

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

/*
|--------------------------------------------------------------------------
| Handle Errors as Exceptions
|--------------------------------------------------------------------------
|
| Here we are converting errors as exceptions so that they are handled well
|
*/

set_error_handler(function ($err_no, $err_str, $err_file, $err_line ) {
    throw new ErrorException($err_str, 0, $err_no, $err_file, $err_line);
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