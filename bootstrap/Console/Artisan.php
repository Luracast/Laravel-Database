<?php
namespace Bootstrap\Console;

use Bootstrap\Container\Container;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Facade;

class Artisan extends \Illuminate\Console\Application
{
    /**
     * Create and boot a new Console application.
     * @return \Illuminate\Console\Application
     */
    public static function start()
    {
        return static::make()->boot();
    }

    /**
     * Create a new Console application.
     * @return Artisan
     */
    public static function make()
    {
        /** @var Container $app */
        $app = Facade::getFacadeApplication();
        /** @var Artisan $console */
        $console = with($console = new static('Laravel Database', '4.2.*'))
            ->setLaravel($app)
            ->setExceptionHandler($app['exception'])
            ->setAutoExit(false);

        $app->instance('artisan', $console);
        static::registerServiceProviders($app);
        $console->add(new AutoloadCommand());
        $console->add(new ServeCommand());
        return $console;
    }

    protected static function registerServiceProviders($app)
    {
        $providers = $app['config.app']['providers'];
        foreach ($providers as $class) {
            /** @var ServiceProvider $instance */
            $instance = new $class($app);
            $instance->register();
        }
    }
} 