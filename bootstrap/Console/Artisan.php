<?php

namespace Bootstrap\Console;

use Bootstrap\Container\Application;
use Closure;
use Illuminate\Console\Events\ArtisanStarting;
use Illuminate\Contracts\Container\Container;
use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Database\Console\Migrations\FreshCommand;
use Illuminate\Database\Console\Migrations\InstallCommand;
use Illuminate\Database\Console\Migrations\MigrateCommand;
use Illuminate\Database\Console\Migrations\MigrateMakeCommand;
use Illuminate\Database\Console\Migrations\RefreshCommand;
use Illuminate\Database\Console\Migrations\ResetCommand;
use Illuminate\Database\Console\Migrations\RollbackCommand;
use Illuminate\Database\Console\Migrations\StatusCommand;
use Illuminate\Database\Console\Seeds\SeedCommand;
use Illuminate\Database\Console\WipeCommand;
use Illuminate\Database\Migrations\DatabaseMigrationRepository;
use Illuminate\Support\Facades\Facade;
use Illuminate\Support\ServiceProvider;

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
        $this->setName('Laravel Database');
        $this->setCatchExceptions(true);
    }

    /**
     * Create and boot a new Console application.
     *
     * @param null $app
     *
     * @return Artisan
     */
    public static function start($app = null)
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
    public static function make($app = null)
    {
        if (!static::$instance) {
            /** @var Application $app */
            $app = Facade::getFacadeApplication();
            /** @var Artisan $console */
            with($console = new static($app, $app['events'], Application::VERSION . '.*'))
                //->setExceptionHandler($app['exception'])
                ->setAutoExit(false);

            $app->instance('artisan', $console);
            static::registerServiceProviders($app);
            $console->add(new AutoloadCommand($app['composer']));
            $console->add(new ServeCommand());
            $console->add(new ModelMakeCommand($app['files']));
            $console->add(new CommandMakeCommand($app['files']));
            $console->add(new EnvironmentCommand());
            $console->add(new VendorPublishCommand($app['files']));

            // DB Migration Commands
            $console->add(new InstallCommand(new DatabaseMigrationRepository($app['db'], "migrations")));
            $console->add(new WipeCommand());
            $console->add(new MigrateCommand($app['migrator']));
            $console->add(new MigrateMakeCommand($app['migration.creator'], $app['composer']));
            $console->add(new StatusCommand($app['migrator']));
            $console->add(new RefreshCommand());
            $console->add(new ResetCommand($app['migrator']));
            $console->add(new RollbackCommand($app['migrator']));
            $console->add(new FreshCommand());

            // DB Seed Commands
            $console->add(new SeedCommand($app['db']));
            $console->add(new SeedMakeCommand($app['files'], $app['composer']));

            //Tinker Command
            //$console->add(new TinkerCommand());

            $app['events']->dispatch(new ArtisanStarting($console));
            $console->bootstrap();
            static::$instance = $console;
        }

        return static::$instance;
    }

    protected static function registerServiceProviders($app)
    {
        $providers = $app['config']['app.providers'];
        foreach ($providers as $class) {
            /** @var ServiceProvider $instance */
            $instance = new $class($app);
            if (method_exists($instance, 'boot')) {
                $instance->boot();
            }
            $instance->register();
        }
    }

    /**
     * Register a Closure based command with the application.
     *
     * @param string $signature
     * @param Closure $callback
     * @return ClosureCommand
     */
    public function command($signature, Closure $callback)
    {
        $command = new ClosureCommand($signature, $callback);

        $this->add($command);

        return $command;
    }
}
