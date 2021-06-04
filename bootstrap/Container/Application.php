<?php

namespace Bootstrap\Container;

use Closure;
use Illuminate\Container\Container;

class Application extends Container
{

    const VERSION = '8';

    /**
     * The base path of the application installation.
     *
     * @var string
     */
    protected $basePath;

    /**
     * Create a new Lumen application instance.
     *
     * @param string|null $basePath
     *
     * @return void
     */
    public function __construct(string $basePath = null)
    {
        $this->basePath = $basePath;
        $this->bootstrapContainer();
        //$this->registerErrorHandling();
    }

    /**
     * Bootstrap the application container.
     *
     * @return void
     */
    protected function bootstrapContainer()
    {
        static::setInstance($this);
        $this->instance('app', $this);
        $this->instance('path', $this->path());
    }

    /**
     * Get the path to the application "app" directory.
     *
     * @return string
     */
    public function path(): string
    {
        return $this->basePath . DIRECTORY_SEPARATOR . 'app';
    }

    public static function version(): string
    {
        return static::VERSION;
    }

    /**
     * Get the base path for the application.
     *
     * @param string|null $path
     *
     * @return string
     */
    public function basePath(string $path = null): string
    {
        if (isset($this->basePath)) {
            return $this->basePath . ($path ? '/' . $path : $path);
        }
        if ($this->runningInConsole()) {
            $this->basePath = getcwd();
        } else {
            $this->basePath = realpath(getcwd() . '/../');
        }

        return $this->basePath($path);
    }

    /**
     * Determine if the application is running in the console.
     *
     * @return bool
     */
    public function runningInConsole(): bool
    {
        return php_sapi_name() === 'cli';
    }

    /**
     * Get the database path for the application.
     *
     * @return string
     */
    public function databasePath(): string
    {
        return database_path();
    }

    /**
     * Get the storage path for the application.
     *
     * @param string|null $path
     *
     * @return string
     */
    public function storagePath(string $path = null): string
    {
        return storage_path($path);
    }

    /**
     * Detect the application's current environment.
     *
     * @param array|string $environments
     *
     * @return string
     */
    public function detectEnvironment($environments): string
    {
        $args = $_SERVER['argv'] ?? null;
        if (php_sapi_name() == 'cli' && !is_null($value = $this->getEnvironmentArgument($args))) {
            //running in console and env param is set
            return $this['env'] = head(array_slice(explode('=', $value), 1));
        } else {
            //running as the web app

            if ($environments instanceof Closure) {
                // If the given environment is just a Closure, we will defer the environment check
                // to the Closure the developer has provided, which allows them to totally swap
                // the webs environment detection logic with their own custom Closure's code.
                return $this['env'] = call_user_func($environments);
            } elseif (is_array($environments)) {
                foreach ($environments as $environment => $hosts) {
                    // To determine the current environment, we'll simply iterate through the possible
                    // environments and look for the host that matches the host for this request we
                    // are currently processing here, then return back these environment's names.
                    foreach ((array)$hosts as $host) {
                        if (str_is($host, gethostname())) {
                            return $this['env'] = $environment;
                        }
                    }
                }
            } elseif (is_string($environments)) {
                return $this['env'] = $environments;
            }
        }

        return $this['env'] = 'production';
    }

    /**
     * Get the environment argument from the console.
     *
     * @param array $args
     *
     * @return string|null
     */
    private function getEnvironmentArgument(array $args): ?string
    {
        return array_first(
            $args,
            function ($k, $v) {
                return starts_with($v, '--env');
            }
        );
    }

    public function environment()
    {
        return $this['env'];
    }

    /**
     * Bind the installation paths to the application.
     *
     * @param array $paths
     *
     * @return void
     */
    public function bindInstallPaths(array $paths)
    {
        $this->instance('path', realpath($paths['app']));

        // Here we will bind the install paths into the container as strings that can be
        // accessed from any point in the system. Each path key is prefixed with path
        // so that they have the consistent naming convention inside the container.
        foreach (array_except($paths, ['app']) as $key => $value) {
            $this->instance("path.{$key}", realpath($value));
        }
    }

    /**
     * Register an application error handler.
     *
     * @param Closure $callback
     *
     * @return void
     */
    public function error(Closure $callback)
    {
        $this['exception']->error($callback);
    }

    /**
     * Get Application Namespace
     *
     * @return int|string
     */
    public function getNamespace()
    {
        return getAppNamespace();
    }
}
