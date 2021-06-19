<?php

namespace Bootstrap\Container;

use Bootstrap\Console\PackageManifest;
use Bootstrap\Console\ProviderRepository;
use Closure;
use Illuminate\Container\Container;
use Illuminate\Contracts\Foundation\Application as ApplicationContract;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Support\Env;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

class Application extends Container implements ApplicationContract
{

    const VERSION = '8';

    /**
     * The base path of the application installation.
     *
     * @var string
     */
    protected $basePath;

    /**
     * The prefixes of absolute cache paths for use during normalization.
     *
     * @var string[]
     */
    protected $absoluteCachePathPrefixes = ['/', '\\'];
    /**
     * @var bool
     */
    protected $booted = false;

    /**
     * The array of booting callbacks.
     *
     * @var callable[]
     */
    protected $bootingCallbacks = [];

    /**
     * The array of booted callbacks.
     *
     * @var callable[]
     */
    protected $bootedCallbacks = [];

    protected $loadedProviders = [];
    protected $deferredServices = [];
    protected $serviceProviders = [];
    /**
     * @var bool
     */
    protected $hasBeenBootstrapped = false;
    /**
     * @var callable[]
     */
    protected $terminatingCallbacks = [];

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

    /**
     * @return string
     */
    public function version(): string
    {
        return static::VERSION;
    }

    /**
     * Get the base path for the application.
     *
     * @param string $path
     *
     * @return string
     */
    public function basePath($path = ''): string
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
     * Get the path to the database directory.
     *
     * @param string $path Optionally, a path to append to the database path
     * @return string
     */
    public function databasePath($path = ''): string
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

    /**
     * Get or check the current application environment.
     *
     * @param string|array $environments
     * @return string|bool
     */
    public function environment(...$environments)
    {
        if (count($environments) > 0) {
            $patterns = is_array($environments[0]) ? $environments[0] : $environments;

            return Str::is($patterns, $this['env']);
        }
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

    public function bootstrapPath($path = ''): string
    {
        return $this->basePath . DIRECTORY_SEPARATOR . 'bootstrap' . ($path ? DIRECTORY_SEPARATOR . $path : $path);
    }

    public function configPath($path = ''): string
    {
        return $this->basePath . DIRECTORY_SEPARATOR . 'config' . ($path ? DIRECTORY_SEPARATOR . $path : $path);
    }

    public function resourcePath($path = ''): string
    {
        return $this->basePath . DIRECTORY_SEPARATOR . 'resources' . ($path ? DIRECTORY_SEPARATOR . $path : $path);
    }

    public function runningUnitTests(): bool
    {
        return $this['env'] === 'testing';
    }

    public function isDownForMaintenance()
    {
        return file_exists($this->storagePath().'/framework/down');
    }

    public function registerConfiguredProviders()
    {
        $providers = Collection::make($this->config['app.providers'])
            ->partition(function ($provider) {
                return strpos($provider, 'Illuminate\\') === 0;
            });

        $providers->splice(1, 0, [$this->make(PackageManifest::class)->providers()]);

        (new ProviderRepository($this, new Filesystem, $this->getCachedServicesPath()))
            ->load($providers->collapse()->toArray());
    }

    public function addDeferredServices(array $services)
    {
        $this->deferredServices = array_merge($this->deferredServices, $services);
    }

    /**
     * Get the path to the cached services.php file.
     *
     * @return string
     */
    public function getCachedServicesPath(): string
    {
        return $this->normalizeCachePath('APP_SERVICES_CACHE', 'cache/services.php');
    }

    /**
     * Normalize a relative or absolute path to a cache file.
     *
     * @param  string  $key
     * @param  string  $default
     * @return string
     */
    protected function normalizeCachePath($key, $default): string
    {
        if (is_null($env = Env::get($key))) {
            return $this->bootstrapPath($default);
        }

        return Str::startsWith($env, $this->absoluteCachePathPrefixes)
            ? $env
            : $this->basePath($env);
    }

    public function getProvider($provider)
    {
        return array_values($this->getProviders($provider))[0] ?? null;
    }

    protected function markAsRegistered($provider)
    {
        $this->serviceProviders[] = $provider;

        $this->loadedProviders[get_class($provider)] = true;
    }

    /**
     * Register a service provider with the application.
     *
     * @param  \Illuminate\Support\ServiceProvider|string  $provider
     * @param  bool  $force
     * @return \Illuminate\Support\ServiceProvider
     */
    public function register($provider, $force = false)
    {
        if (($registered = $this->getProvider($provider)) && ! $force) {
            return $registered;
        }

        // If the given "provider" is a string, we will resolve it, passing in the
        // application instance automatically for the developer. This is simply
        // a more convenient way of specifying your service provider classes.
        if (is_string($provider)) {
            $provider = $this->resolveProvider($provider);
        }

        $provider->register();

        // If there are bindings / singletons set as properties on the provider we
        // will spin through them and register them with the application, which
        // serves as a convenience layer while registering a lot of bindings.
        if (property_exists($provider, 'bindings')) {
            foreach ($provider->bindings as $key => $value) {
                $this->bind($key, $value);
            }
        }

        if (property_exists($provider, 'singletons')) {
            foreach ($provider->singletons as $key => $value) {
                $this->singleton($key, $value);
            }
        }

        $this->markAsRegistered($provider);

        // If the application has already booted, we will call this boot method on
        // the provider class so it has an opportunity to do its boot logic and
        // will be ready for any usage by this developer's application logic.
        if ($this->isBooted()) {
            $this->bootProvider($provider);
        }

        return $provider;
    }

    /**
     * Determine if the application has booted.
     *
     * @return bool
     */
    public function isBooted(): bool
    {
        return $this->booted;
    }

    /**
     * Boot the application's service providers.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->isBooted()) {
            return;
        }

        // Once the application has booted we will also fire some "booted" callbacks
        // for any listeners that need to do work after this initial booting gets
        // finished. This is useful when ordering the boot-up processes we run.
        $this->fireAppCallbacks($this->bootingCallbacks);

        array_walk($this->serviceProviders, function ($p) {
            $this->bootProvider($p);
        });

        $this->booted = true;

        $this->fireAppCallbacks($this->bootedCallbacks);
    }

    /**
     * Call the booting callbacks for the application.
     *
     * @param  callable[]  $callbacks
     * @return void
     */
    protected function fireAppCallbacks(array $callbacks)
    {
        foreach ($callbacks as $callback) {
            $callback($this);
        }
    }

    /**
     * Boot the given service provider.
     *
     * @param  \Illuminate\Support\ServiceProvider  $provider
     * @return void
     */
    protected function bootProvider(ServiceProvider $provider)
    {
        $provider->callBootingCallbacks();

        if (method_exists($provider, 'boot')) {
            $this->call([$provider, 'boot']);
        }

        $provider->callBootedCallbacks();
    }

    /**
     * Register a deferred provider and service.
     *
     * @param  string  $provider
     * @param  string|null  $service
     * @return void
     */
    public function registerDeferredProvider($provider, $service = null)
    {
        // Once the provider that provides the deferred service has been registered we
        // will remove it from our local list of the deferred services with related
        // providers so that this container does not try to resolve it out again.
        if ($service) {
            unset($this->deferredServices[$service]);
        }

        $this->register($instance = new $provider($this));

        if (! $this->isBooted()) {
            $this->booting(function () use ($instance) {
                $this->bootProvider($instance);
            });
        }
    }

    /**
     * Resolve a service provider instance from the class name.
     *
     * @param  string  $provider
     * @return \Illuminate\Support\ServiceProvider
     */
    public function resolveProvider($provider)
    {
        return new $provider($this);
    }

    public function booting($callback)
    {
        $this->bootingCallbacks[] = $callback;
    }

    public function booted($callback)
    {
        $this->bootedCallbacks[] = $callback;

        if ($this->isBooted()) {
            $this->fireAppCallbacks([$callback]);
        }
    }

    public function bootstrapWith(array $bootstrappers)
    {
        $this->hasBeenBootstrapped = true;

        foreach ($bootstrappers as $bootstrapper) {
            $this['events']->dispatch('bootstrapping: '.$bootstrapper, [$this]);

            $this->make($bootstrapper)->bootstrap($this);

            $this['events']->dispatch('bootstrapped: '.$bootstrapper, [$this]);
        }
    }

    /**
     * Get the path to the cached packages.php file.
     *
     * @return string
     */
    public function getCachedPackagesPath()
    {
        return $this->normalizeCachePath('APP_PACKAGES_CACHE', 'cache/packages.php');
    }

    public function getLocale()
    {
        return $this['config']->get('app.locale');
    }

    public function getProviders($provider)
    {
        $name = is_string($provider) ? $provider : get_class($provider);

        return Arr::where($this->serviceProviders, function ($value) use ($name) {
            return $value instanceof $name;
        });
    }

    public function hasBeenBootstrapped(): bool
    {
        return $this->hasBeenBootstrapped;
    }

    public function loadDeferredProviders()
    {
        // We will simply spin through each of the deferred providers and register each
        // one and boot them if the application has booted. This should make each of
        // the remaining services available to this application for immediate use.
        foreach ($this->deferredServices as $service => $provider) {
            $this->loadDeferredProvider($service);
        }

        $this->deferredServices = [];
    }

    public function loadDeferredProvider($service)
    {
        if (! $this->isDeferredService($service)) {
            return;
        }

        $provider = $this->deferredServices[$service];

        // If the service provider has not already been loaded and registered we can
        // register it with the application and remove the service from this list
        // of deferred services, since it will already be loaded on subsequent.
        if (! isset($this->loadedProviders[$provider])) {
            $this->registerDeferredProvider($provider, $service);
        }
    }

    public function isDeferredService($service): bool
    {
        return isset($this->deferredServices[$service]);
    }

    public function setLocale($locale)
    {
        $this['config']->set('app.locale', $locale);

        $this['translator']->setLocale($locale);

        //$this['events']->dispatch(new LocaleUpdated($locale));
    }

    public function shouldSkipMiddleware(): bool
    {
        return $this->bound('middleware.disable') &&
            $this->make('middleware.disable') === true;
    }

    public function terminate()
    {
        foreach ($this->terminatingCallbacks as $terminating) {
            $this->call($terminating);
        }
    }
}
