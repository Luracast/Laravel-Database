<?php
namespace Bootstrap\Container;

class Container extends \Illuminate\Container\Container
{
    public function environment()
    {
        return 'local';
    }

    /**
     * Bind the installation paths to the application.
     *
     * @param  array $paths
     *
     * @return void
     */
    public function bindInstallPaths(array $paths)
    {
        $this->instance('path', realpath($paths['app']));

        // Here we will bind the install paths into the container as strings that can be
        // accessed from any point in the system. Each path key is prefixed with path
        // so that they have the consistent naming convention inside the container.
        foreach (array_except($paths, array('app')) as $key => $value) {
            $this->instance("path.{$key}", realpath($value));
        }
    }
} 