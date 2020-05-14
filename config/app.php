<?php

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\MigrationServiceProvider;

return [

    /*
    |--------------------------------------------------------------------------
    | Autoloaded Service Providers
    |--------------------------------------------------------------------------
    |
    | The service providers listed here will be automatically loaded on the
    | request to your application. Feel free to add your own services to
    | this array to grant expanded functionality to your applications.
    |
    */

    'providers' => [
        MigrationServiceProvider::class,
        /*
         * To add Redis support,
         *     - run composer require illuminate/redis:7.10.*
         *     - uncomment the line below
         */
        // 'Illuminate\Redis\RedisServiceProvider',
    ],

    /*
    |--------------------------------------------------------------------------
    | Class Aliases
    |--------------------------------------------------------------------------
    |
    | This array of class aliases will be registered when this application
    | is started. However, feel free to register as many as you wish as
    | the aliases are "lazy" loaded so they don't hinder performance.
    |
    */

    'aliases' => [
        'DB'                                             => 'Illuminate\Database\Capsule\Manager',
        'Eloquent'                                       => 'Illuminate\Database\Eloquent\Model',
        'Schema'                                         => 'Illuminate\Support\Facades\Schema',
        'Seeder'                                         => 'Illuminate\Database\Seeder',
        'Artisan'                                        => 'Bootstrap\Console\ArtisanFacade',
        'Config'                                         => 'Illuminate\Support\Facades\Config',
        'Cache'                                          => 'Illuminate\Support\Facades\Cache',
        'File'                                           => 'Illuminate\Support\Facades\File',
        'Event'                                          => 'Illuminate\Support\Facades\Event',
        'Redis'                                          => 'Illuminate\Support\Facades\Redis',
        'Queue'                                          => 'Illuminate\Queue\Capsule\Manager',

        //backward compatibility for 4.2.x Models
        'Illuminate\Database\Eloquent\SoftDeletingTrait' => SoftDeletes::class
    ],

];
