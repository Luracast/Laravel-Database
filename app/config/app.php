<?php

return array(

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

	'providers' => array(
		'Illuminate\Database\MigrationServiceProvider',
		'Illuminate\Database\SeedServiceProvider',
	),

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

	'aliases' => array(
		'DB'                => 'Illuminate\Database\Capsule\Manager',
		'Eloquent'          => 'Illuminate\Database\Eloquent\Model',
		'Schema'            => 'Illuminate\Support\Facades\Schema',
		'Seeder'            => 'Illuminate\Database\Seeder',
		'SoftDeletingTrait' => 'Illuminate\Database\Eloquent\SoftDeletingTrait',
		'Artisan'           => 'Bootstrap\Console\ArtisanFacade',
		'Config'            => 'Luracast\Config\Config',
		'Cache'             => 'Illuminate\Support\Facades\Cache',
		'File'              => 'Illuminate\Support\Facades\File',
		'Event'             => 'Illuminate\Support\Facades\Event',
	),

);
