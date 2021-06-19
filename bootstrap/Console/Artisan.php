<?php

namespace Bootstrap\Console;

use Bootstrap\Container\Application;
use Closure;
use Illuminate\Console\Events\ArtisanStarting;
use Illuminate\Contracts\Container\Container;
use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Database\Console\DbCommand;
use Illuminate\Database\Console\DumpCommand;
use Illuminate\Database\Console\Seeds\SeedCommand;
use Illuminate\Database\Console\WipeCommand;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Facade;
use Illuminate\Support\ServiceProvider;
use Bootstrap\Console\PackageDiscoverCommand;

class Artisan extends \Illuminate\Console\Application
{
    /**
     * @var Artisan
     */
    private static $instance;

    /**
     * Create a new Artisan console application.
     *
     * @param Container $laravel
     * @param Dispatcher $events
     * @param string $version
     * @return void
     */
    public function __construct(Container $laravel, Dispatcher $events, $version)
    {
        parent::__construct($laravel, $events, $version);
        $this->setName('Artisan');
        $this->setCatchExceptions(true);
    }

    /**
     * Create and boot a new Console application.
     *
     * @param null $app
     *
     * @return Artisan
     */
    public static function start($app = null): Artisan
    {
        if (static::$instance) {
            return static::$instance;
        }

        return static::make();
    }

    /**
     * Create a new Console application.
     *
     * @param null $app
     *
     * @return Artisan
     */
    public static function make($app = null): Artisan
    {
        if (!static::$instance) {
            /** @var Application $app */
            $app = Facade::getFacadeApplication();
            with($console = new static($app, $app['events'], Application::VERSION . '.*'))
                //->setExceptionHandler($app['exception'])
                ->setAutoExit(false);

            $app->instance('artisan', $console);
            static::registerServiceProviders($app);
            $console->add(new AutoloadCommand($app['composer']));
            $console->add(new ServeCommand());
            $console->add(new ModelMakeCommand($app['files']));
            $console->add(new ConsoleMakeCommand($app['files']));
            $console->add(new EnvironmentCommand());
            $console->add(new VendorPublishCommand($app['files']));
            $console->add(new FactoryMakeCommand($app['files']));
            $console->add(new DbCommand());
            $console->add(new DumpCommand());
            $console->add(new WipeCommand());

            /*
            use Illuminate\Database\Console\Migrations\FreshCommand;
            use Illuminate\Database\Console\Migrations\InstallCommand;
            use Illuminate\Database\Console\Migrations\MigrateCommand;
            use Illuminate\Database\Console\Migrations\MigrateMakeCommand;
            use Illuminate\Database\Console\Migrations\RefreshCommand;
            use Illuminate\Database\Console\Migrations\ResetCommand;
            use Illuminate\Database\Console\Migrations\RollbackCommand;
            use Illuminate\Database\Console\Migrations\StatusCommand;

            use Illuminate\Database\Migrations\DatabaseMigrationRepository;
            use Illuminate\Database\Migrations\MigrationCreator;
            use Illuminate\Database\Migrations\Migrator;

            // DB Migration Commands handled through service provider in config/app.php
            $app->instance(
                'migration.repository',
                new DatabaseMigrationRepository($app['db'], "migrations")
            );
            $app->instance(
                'migrator',
                new Migrator($app['migration.repository'], $app['db'], $app['files'], $app['events'])
            );
            $app->instance(
                'migration.creator',
                new MigrationCreator($app['files'], $app->basePath('stubs'))
            );
            $console->add(new InstallCommand($app['migration.repository']));

            $console->add(new MigrateCommand($app['migrator'], $app['events']));
            $console->add(new MigrateMakeCommand($app['migration.creator'], $app['composer']));
            $console->add(new StatusCommand($app['migrator']));
            $console->add(new RefreshCommand());
            $console->add(new ResetCommand($app['migrator']));
            $console->add(new RollbackCommand($app['migrator']));
            $console->add(new FreshCommand());
            */

            // DB Seed Commands
            $console->add(new SeedCommand($app['db']));
            $console->add(new SeedMakeCommand($app['files'], $app['composer']));

            //Tinker Command
            $console->add(new TinkerCommand());

            //Package AutoDiscovery
            $console->add(new PackageDiscoverCommand());

            $app['events']->dispatch(new ArtisanStarting($console));
            $console->bootstrap();
            static::$instance = $console;
        }

        return static::$instance;
    }

    protected static function registerServiceProviders($app)
    {
        $providers = Collection::make($app->config['app.providers'])
            ->partition(function ($provider) {
                return strpos($provider, 'Illuminate\\') === 0;
            });

        $providers->splice(1, 0, [$app->make(PackageManifest::class)->providers()]);

        $providers = $providers->collapse()->toArray();

        foreach ($providers as $class) {
            /** @var ServiceProvider $instance */
            $instance = new $class($app);
            $instance->register();
            if (property_exists($instance, 'bindings')) {
                foreach ($instance->bindings as $key => $value) {
                    $app->bind($key, $value);
                }
            }

            if (property_exists($instance, 'singletons')) {
                foreach ($instance->singletons as $key => $value) {
                    $app->singleton($key, $value);
                }
            }
            if (method_exists($instance, 'boot')) {
                $instance->boot();
            }
        }

//        (new ProviderRepository($app, new Filesystem, $app->getCachedServicesPath()))
//            ->load($providers->collapse()->toArray());
    }

    /**
     * Register a Closure based command with the application.
     *
     * @param string $signature
     * @param Closure $callback
     * @return ClosureCommand
     */
    public function command(string $signature, Closure $callback): ClosureCommand
    {
        $command = new ClosureCommand($signature, $callback);

        $this->add($command);

        return $command;
    }
}
