<?php
namespace Bootstrap\Console;

use Exception;

class ExceptionHandler
{
    function handleConsole(Exception $exception)
    {
        return $exception->getMessage();
    }
} 