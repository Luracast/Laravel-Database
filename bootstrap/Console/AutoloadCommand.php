<?php
namespace Bootstrap\Console;

use Illuminate\Console\Command;

class AutoloadCommand extends Command
{
    protected $name = 'dump-autoload';
    protected $description = 'Regenerate composer autoload files';

    protected function fire()
    {
        $status = 0;
        $output = array();
        $composer = BASE . '/composer.phar';
        if (is_readable($composer)) {
            $composer = 'php ' . $composer;
        } else {
            $composer = 'composer';
        }
        $message = exec("$composer dump-autoload -o", $output, $status);
        if ($status) {
            $this->error('composer not found');
            $this->info($message);
            exit(100);
        } else {
            $this->info($message);
        }
    }
} 