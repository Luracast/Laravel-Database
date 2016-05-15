<?php

use Bootstrap\Console\ExceptionHandler;
use Illuminate\Support\Composer;

/*
|--------------------------------------------------------------------------
| Bind Needed Properties
|--------------------------------------------------------------------------
|
| Here we are binding the exception handler
|
*/

$app->singleton('exception', function () use ($app) {
    return new ExceptionHandler();
});


$app->singleton('composer', function ($app) {
    return new Composer($app['files'], __DIR__ . '/..');
});

/*
|--------------------------------------------------------------------------
| Handle Errors as Exceptions
|--------------------------------------------------------------------------
|
| Here we are converting errors as exceptions so that they are handled well
|
*/

set_error_handler(function ($err_no, $err_str, $err_file, $err_line) {
    throw new ErrorException($err_str, 0, $err_no, $err_file, $err_line);
});

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