<?php
namespace Bootstrap\Console;

use Closure;
use Symfony\Component\Console\Command\Command as SymfonyCommand;

/**
 * Class ArtisanFacade
 * @package Bootstrap\Console
 *
 * @method ClosureCommand command($signature, Closure $callback)  Register a Closure based command with the application.
 * @method SymfonyCommand add(SymfonyCommand $command)  Add a command to the console.
 * @method int run() Execute
 */
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