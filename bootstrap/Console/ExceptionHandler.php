<?php
namespace Bootstrap\Console;

use Exception;
use Closure;

class ExceptionHandler
{
    protected $handlers = array();

    function handleConsole(Exception $exception)
    {
        return $exception->getMessage();
    }

    /**
     * Register an application error handler.
     *
     * @param  Closure $callback
     *
     * @return void
     */
    public function error(Closure $callback)
    {
        array_unshift($this->handlers, $callback);
    }
} 