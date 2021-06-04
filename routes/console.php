<?php


/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/


use App\Console\Commands\ControllerMakeCommand;

Artisan::command('inspire', function () {
    $this->comment("All is well");
})->describe('Display an inspiring quote');


//Artisan::add(new MyCommand());
Artisan::add(new ControllerMakeCommand($app['files']));
