<?php
namespace Bootstrap\Console;

use Bootstrap\Container\Container;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Facade;

class Application extends \Illuminate\Console\Application
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
     * @return Application
     */
    public static function make()
    {
        /** @var Container $app */
        $app = Facade::getFacadeApplication();
        /** @var Application $console */
        $console = with($console = new static('Laravel Database', '4.2.*'))
            ->setLaravel($app)
            ->setExceptionHandler($app['exception'])
            ->setAutoExit(false);

        $app->instance('artisan', $console);
        static::registerServiceProviders($app);
        $console->add(new AutoloadCommand());
        return $console;
    }

    public static function registerServiceProviders($app)
    {
        $providers = $app['config.app']['providers'];
        foreach ($providers as $class) {
            /** @var ServiceProvider $instance */
            $instance = new $class($app);
            $instance->register();
        }
    }
} 