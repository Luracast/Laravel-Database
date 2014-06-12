<?php namespace Bootstrap\Container;

use ArrayAccess;

class Config implements ArrayAccess
{
    protected $container = array();
    /** @var  string */
    protected $path;
    /** @var  string */
    protected $environment;

    /** @var  static */
    protected static $instance;

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
     * @param string      $path        folder path for the config files
     *
     * @param string|null $environment path for fine tuning config files for your location
     *
     * @return Config
     */
    public static function init($path, $environment = null)
    {
        if (!static::$instance)
            static::$instance = new Config($path, $environment);
        elseif (static::$instance->path !== $path || static::$instance->environment !== $environment) {
            static::$instance->path = $path;
            static::$instance->environment = $environment;
            static::$instance->container = array();
        }
        return static::$instance;
    }

    public static function get($name)
    {
        if (!static::$instance)
            throw new \BadFunctionCallException('Config::init($path, $environment) should to be called first');
        return static::$instance->offsetGet($name);
    }

    public function offsetExists($offset)
    {
        if (isset($this->container[$offset])) {
            return true;
        }
        if ($offset != ($name = strtok($offset, '.'))) {
            if (isset($this->container[$name])) {
                $p = $this->container[$name];
                while (false !== ($name = strtok('.'))) {
                    if (!isset($p[$name]))
                        return false;
                    $p = $p[$name];
                }
                $this->container[$offset] = $p;
                return true;
            } else {
                //lazy load the config file
                if (is_readable("$this->path/$name.php")) {
                    //merge environment file if available
                    $this->container[$name] = include "$this->path/$name.php";
                    if (!empty($this->environment) && is_readable($file = "$this->path/$this->environment/$name.php")) {
                        $this->container[$name] = array_replace_recursive($this->container[$name], (include $file));
                    }
                    return $this->offsetExists($offset);
                }
            }
        }
        return false;
    }


    public function offsetGet($offset)
    {
        return $this->offsetExists($offset) ? $this->container[$offset] : null;
    }


    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }


    public function offsetUnset($offset)
    {
        $this->container[$offset] = null;
    }
}