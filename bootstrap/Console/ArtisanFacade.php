<?php
namespace Bootstrap\Console;


class ArtisanFacade
{
    /**
     * Dynamically pass methods to the artisan instance.
     *
     * @param  string $method
     * @param  array  $parameters
     *
     * @return mixed
     */
    public static function __callStatic($method, $parameters)
    {
        $instance = Artisan::start();
        return call_user_func_array(array($instance, $method), $parameters);
    }

} 