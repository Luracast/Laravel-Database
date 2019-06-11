<?php
// @formatter:off

namespace PHPSTORM_META {

   /**
    * PhpStorm Meta file, to provide autocomplete information for PhpStorm
    * Generated on 2019-06-11 08:24:56.
    *
    * @author Barry vd. Heuvel <barryvdh@gmail.com>
    * @see https://github.com/barryvdh/laravel-ide-helper
    */
    override(new \Illuminate\Contracts\Container\Container, map([
        '' => '@',
        'app' => \Bootstrap\Container\Application::class,
        'cache' => \Illuminate\Cache\CacheManager::class,
        'command.ide-helper.eloquent' => \Barryvdh\LaravelIdeHelper\Console\EloquentCommand::class,
        'command.ide-helper.generate' => \Barryvdh\LaravelIdeHelper\Console\GeneratorCommand::class,
        'command.ide-helper.meta' => \Barryvdh\LaravelIdeHelper\Console\MetaCommand::class,
        'command.ide-helper.models' => \Barryvdh\LaravelIdeHelper\Console\ModelsCommand::class,
        'composer' => \Illuminate\Support\Composer::class,
        'db' => \Illuminate\Database\DatabaseManager::class,
        'events' => \Illuminate\Events\Dispatcher::class,
        'exception' => \Bootstrap\Console\ExceptionHandler::class,
        'files' => \Illuminate\Filesystem\Filesystem::class,
        'migration.creator' => \Illuminate\Database\Migrations\MigrationCreator::class,
        'migration.repository' => \Illuminate\Database\Migrations\DatabaseMigrationRepository::class,
        'migrator' => \Illuminate\Database\Migrations\Migrator::class,
    ]));
    override(\Illuminate\Container\Container::makeWith(0), map([
        '' => '@',
        'app' => \Bootstrap\Container\Application::class,
        'cache' => \Illuminate\Cache\CacheManager::class,
        'command.ide-helper.eloquent' => \Barryvdh\LaravelIdeHelper\Console\EloquentCommand::class,
        'command.ide-helper.generate' => \Barryvdh\LaravelIdeHelper\Console\GeneratorCommand::class,
        'command.ide-helper.meta' => \Barryvdh\LaravelIdeHelper\Console\MetaCommand::class,
        'command.ide-helper.models' => \Barryvdh\LaravelIdeHelper\Console\ModelsCommand::class,
        'composer' => \Illuminate\Support\Composer::class,
        'db' => \Illuminate\Database\DatabaseManager::class,
        'events' => \Illuminate\Events\Dispatcher::class,
        'exception' => \Bootstrap\Console\ExceptionHandler::class,
        'files' => \Illuminate\Filesystem\Filesystem::class,
        'migration.creator' => \Illuminate\Database\Migrations\MigrationCreator::class,
        'migration.repository' => \Illuminate\Database\Migrations\DatabaseMigrationRepository::class,
        'migrator' => \Illuminate\Database\Migrations\Migrator::class,
    ]));
    override(\Illuminate\Contracts\Container\Container::make(0), map([
        '' => '@',
        'app' => \Bootstrap\Container\Application::class,
        'cache' => \Illuminate\Cache\CacheManager::class,
        'command.ide-helper.eloquent' => \Barryvdh\LaravelIdeHelper\Console\EloquentCommand::class,
        'command.ide-helper.generate' => \Barryvdh\LaravelIdeHelper\Console\GeneratorCommand::class,
        'command.ide-helper.meta' => \Barryvdh\LaravelIdeHelper\Console\MetaCommand::class,
        'command.ide-helper.models' => \Barryvdh\LaravelIdeHelper\Console\ModelsCommand::class,
        'composer' => \Illuminate\Support\Composer::class,
        'db' => \Illuminate\Database\DatabaseManager::class,
        'events' => \Illuminate\Events\Dispatcher::class,
        'exception' => \Bootstrap\Console\ExceptionHandler::class,
        'files' => \Illuminate\Filesystem\Filesystem::class,
        'migration.creator' => \Illuminate\Database\Migrations\MigrationCreator::class,
        'migration.repository' => \Illuminate\Database\Migrations\DatabaseMigrationRepository::class,
        'migrator' => \Illuminate\Database\Migrations\Migrator::class,
    ]));
    override(\Illuminate\Contracts\Container\Container::makeWith(0), map([
        '' => '@',
        'app' => \Bootstrap\Container\Application::class,
        'cache' => \Illuminate\Cache\CacheManager::class,
        'command.ide-helper.eloquent' => \Barryvdh\LaravelIdeHelper\Console\EloquentCommand::class,
        'command.ide-helper.generate' => \Barryvdh\LaravelIdeHelper\Console\GeneratorCommand::class,
        'command.ide-helper.meta' => \Barryvdh\LaravelIdeHelper\Console\MetaCommand::class,
        'command.ide-helper.models' => \Barryvdh\LaravelIdeHelper\Console\ModelsCommand::class,
        'composer' => \Illuminate\Support\Composer::class,
        'db' => \Illuminate\Database\DatabaseManager::class,
        'events' => \Illuminate\Events\Dispatcher::class,
        'exception' => \Bootstrap\Console\ExceptionHandler::class,
        'files' => \Illuminate\Filesystem\Filesystem::class,
        'migration.creator' => \Illuminate\Database\Migrations\MigrationCreator::class,
        'migration.repository' => \Illuminate\Database\Migrations\DatabaseMigrationRepository::class,
        'migrator' => \Illuminate\Database\Migrations\Migrator::class,
    ]));
    override(\App::make(0), map([
        '' => '@',
        'app' => \Bootstrap\Container\Application::class,
        'cache' => \Illuminate\Cache\CacheManager::class,
        'command.ide-helper.eloquent' => \Barryvdh\LaravelIdeHelper\Console\EloquentCommand::class,
        'command.ide-helper.generate' => \Barryvdh\LaravelIdeHelper\Console\GeneratorCommand::class,
        'command.ide-helper.meta' => \Barryvdh\LaravelIdeHelper\Console\MetaCommand::class,
        'command.ide-helper.models' => \Barryvdh\LaravelIdeHelper\Console\ModelsCommand::class,
        'composer' => \Illuminate\Support\Composer::class,
        'db' => \Illuminate\Database\DatabaseManager::class,
        'events' => \Illuminate\Events\Dispatcher::class,
        'exception' => \Bootstrap\Console\ExceptionHandler::class,
        'files' => \Illuminate\Filesystem\Filesystem::class,
        'migration.creator' => \Illuminate\Database\Migrations\MigrationCreator::class,
        'migration.repository' => \Illuminate\Database\Migrations\DatabaseMigrationRepository::class,
        'migrator' => \Illuminate\Database\Migrations\Migrator::class,
    ]));
    override(\App::makeWith(0), map([
        '' => '@',
        'app' => \Bootstrap\Container\Application::class,
        'cache' => \Illuminate\Cache\CacheManager::class,
        'command.ide-helper.eloquent' => \Barryvdh\LaravelIdeHelper\Console\EloquentCommand::class,
        'command.ide-helper.generate' => \Barryvdh\LaravelIdeHelper\Console\GeneratorCommand::class,
        'command.ide-helper.meta' => \Barryvdh\LaravelIdeHelper\Console\MetaCommand::class,
        'command.ide-helper.models' => \Barryvdh\LaravelIdeHelper\Console\ModelsCommand::class,
        'composer' => \Illuminate\Support\Composer::class,
        'db' => \Illuminate\Database\DatabaseManager::class,
        'events' => \Illuminate\Events\Dispatcher::class,
        'exception' => \Bootstrap\Console\ExceptionHandler::class,
        'files' => \Illuminate\Filesystem\Filesystem::class,
        'migration.creator' => \Illuminate\Database\Migrations\MigrationCreator::class,
        'migration.repository' => \Illuminate\Database\Migrations\DatabaseMigrationRepository::class,
        'migrator' => \Illuminate\Database\Migrations\Migrator::class,
    ]));
    override(\app(0), map([
        '' => '@',
        'app' => \Bootstrap\Container\Application::class,
        'cache' => \Illuminate\Cache\CacheManager::class,
        'command.ide-helper.eloquent' => \Barryvdh\LaravelIdeHelper\Console\EloquentCommand::class,
        'command.ide-helper.generate' => \Barryvdh\LaravelIdeHelper\Console\GeneratorCommand::class,
        'command.ide-helper.meta' => \Barryvdh\LaravelIdeHelper\Console\MetaCommand::class,
        'command.ide-helper.models' => \Barryvdh\LaravelIdeHelper\Console\ModelsCommand::class,
        'composer' => \Illuminate\Support\Composer::class,
        'db' => \Illuminate\Database\DatabaseManager::class,
        'events' => \Illuminate\Events\Dispatcher::class,
        'exception' => \Bootstrap\Console\ExceptionHandler::class,
        'files' => \Illuminate\Filesystem\Filesystem::class,
        'migration.creator' => \Illuminate\Database\Migrations\MigrationCreator::class,
        'migration.repository' => \Illuminate\Database\Migrations\DatabaseMigrationRepository::class,
        'migrator' => \Illuminate\Database\Migrations\Migrator::class,
    ]));
    override(\resolve(0), map([
        '' => '@',
        'app' => \Bootstrap\Container\Application::class,
        'cache' => \Illuminate\Cache\CacheManager::class,
        'command.ide-helper.eloquent' => \Barryvdh\LaravelIdeHelper\Console\EloquentCommand::class,
        'command.ide-helper.generate' => \Barryvdh\LaravelIdeHelper\Console\GeneratorCommand::class,
        'command.ide-helper.meta' => \Barryvdh\LaravelIdeHelper\Console\MetaCommand::class,
        'command.ide-helper.models' => \Barryvdh\LaravelIdeHelper\Console\ModelsCommand::class,
        'composer' => \Illuminate\Support\Composer::class,
        'db' => \Illuminate\Database\DatabaseManager::class,
        'events' => \Illuminate\Events\Dispatcher::class,
        'exception' => \Bootstrap\Console\ExceptionHandler::class,
        'files' => \Illuminate\Filesystem\Filesystem::class,
        'migration.creator' => \Illuminate\Database\Migrations\MigrationCreator::class,
        'migration.repository' => \Illuminate\Database\Migrations\DatabaseMigrationRepository::class,
        'migrator' => \Illuminate\Database\Migrations\Migrator::class,
    ]));

    override(\Illuminate\Support\Arr::add(0), type(0));
    override(\Illuminate\Support\Arr::except(0), type(0));
    override(\Illuminate\Support\Arr::first(0), elementType(0));
    override(\Illuminate\Support\Arr::last(0), elementType(0));
    override(\Illuminate\Support\Arr::get(0), elementType(0));
    override(\Illuminate\Support\Arr::only(0), type(0));
    override(\Illuminate\Support\Arr::prepend(0), type(0));
    override(\Illuminate\Support\Arr::pull(0), elementType(0));
    override(\Illuminate\Support\Arr::set(0), type(0));
    override(\Illuminate\Support\Arr::shuffle(0), type(0));
    override(\Illuminate\Support\Arr::sort(0), type(0));
    override(\Illuminate\Support\Arr::sortRecursive(0), type(0));
    override(\Illuminate\Support\Arr::where(0), type(0));
    override(\array_add(0), type(0));
    override(\array_except(0), type(0));
    override(\array_first(0), elementType(0));
    override(\array_last(0), elementType(0));
    override(\array_get(0), elementType(0));
    override(\array_only(0), type(0));
    override(\array_prepend(0), type(0));
    override(\array_pull(0), elementType(0));
    override(\array_set(0), type(0));
    override(\array_sort(0), type(0));
    override(\array_sort_recursive(0), type(0));
    override(\array_where(0), type(0));
    override(\head(0), elementType(0));
    override(\last(0), elementType(0));
    override(\with(0), type(0));
    override(\tap(0), type(0));

}
