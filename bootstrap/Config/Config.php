<?php

namespace Bootstrap\Config;

use ArrayAccess;
use Bootstrap\Contracts\Config as ConfigContract;

/**
 * Config class for loading configuration arrays from various files and provide easy
 * access to nested properties with dot syntax
 *
 * Lazy loads configuration information when requested using Config::get('file.property')
 * or $config['file.property']
 *
 * For example
 *
 * Config::get['database.connections.sqlite'] will load database.php
 * which returns an array that contains connections property
 * which contains the sqlite property value of which will be returned.
 *
 * $path given in the constructor is the path it will look for the file
 *
 * When an environment string is specified, it will look for a folder
 * with that name inside the path and use the returned array to override
 * the properties is original config file thus allowing some customization
 *
 * @package Luracast\Config
 */
class Config implements ArrayAccess, ConfigContract
{
    /** @var  static */
    protected static $instance;
    protected $container = array();
    /** @var  string */
    protected $path;
    /** @var  string */
    protected $environment;
    protected $parsed = [];

    public function __construct($path, $environment = null)
    {
        $this->path = $path;
        $this->environment = $environment;
        if (!static::$instance) {
            static::$instance = $this;
        }
    }

    /**
     * Initialize the Config instance for a specific target path
     *
     * @param string $path folder path for the config files
     * @param string|null $environment path for fine tuning config files with overriding properties
     *
     * @return Config
     */
    public static function init(string $path, ?string $environment = null): Config
    {
        if (!static::$instance) {
            static::$instance = new Config($path, $environment);
        } else {
            static::$instance->path = $path;
            static::$instance->environment = $environment;
            static::$instance->container = array();
        }
        return static::$instance;
    }

    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        $this->container[$offset] = null;
    }

    /**
     * Get all the configuration items for the application.
     *
     * @return array
     */
    public function all(): array
    {
        return $this->container;
    }

    /**
     * Get the specified configuration value.
     *
     * @param string $key
     * @param mixed $default
     * @return mixed
     */
    public function get($key, $default = null)
    {
        return ($this->has($key)) ? $this->offsetGet($key) : $default;
    }

    /**
     * Determine if the given configuration value exists.
     *
     * @param string $key
     * @return bool
     */
    public function has($key)
    {
        return $this->offsetExists($key);
    }

    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        if (isset($this->container[$offset])) {
            return true;
        }
        $name = strtok($offset, '.');
        if (isset($this->container[$name])) {
            $p = $this->container[$name];
            while (false !== ($name = strtok('.'))) {
                if (!isset($p[$name])) {
                    return false;
                }
                $p = $p[$name];
            }
            $this->container[$offset] = $p;
            return true;
        } elseif (!isset($this->parsed[$name])) {
            $this->parsed[$name] = true;
            //lazy load the config file
            if ($files = glob(
                '{' . $this->path . '/' . $name . '.php,' . $this->path . '/' . $name . '.*.php}',
                GLOB_BRACE
            )) {
                foreach ($files as $file) {
                    $base = basename($file, '.php');
                    $parts = explode('.', $base);
                    $p = &$this->container;
                    $lastPart = end($parts);
                    foreach ($parts as $part) {
                        if ($part === $lastPart) {
                            $p[$part] = include $file;
                        } else {
                            if (!isset($p[$part])) {
                                $p[$part] = [];
                            }
                            $p = &$p[$part];
                        }
                    }
                }
                //merge environment file if available
                //$this->container[$name] = include "$this->path/$name.php";
                if (!empty($this->environment) && is_readable($file = "$this->path/$this->environment/$name.php")) {
                    $this->container[$name] = array_replace_recursive($this->container[$name], (include $file));
                }
                return $this->offsetExists($offset);
            }
        }
        return false;
    }

    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->offsetExists($offset) ? $this->container[$offset] : null;
    }

    /**
     * Set a given configuration value.
     *
     * @param array|string $key
     * @param mixed $value
     * @return void
     */
    public function set($key, $value = null)
    {
        $this->offsetSet($key, $value);
    }

    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Prepend a value onto an array configuration value.
     *
     * @param string $key
     * @param mixed $value
     * @return void
     */
    public function prepend($key, $value)
    {
        $this->container = [$key => $value] + $this->container;
    }

    /**
     * Push a value onto an array configuration value.
     *
     * @param string $key
     * @param mixed $value
     * @return void
     */
    public function push($key, $value)
    {
        $this->container = $this->container + [$key => $value];
    }
}
