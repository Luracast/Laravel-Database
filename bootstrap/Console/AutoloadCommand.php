<?php
namespace Bootstrap\Console;

use Illuminate\Console\Command;

class AutoloadCommand extends Command
{
    protected $name = 'dump-autoload';
    protected $description = 'Regenerate composer autoload files';

    protected function fire()
    {
        $this->info(shell_exec('composer dump-autoload -o'));
    }
} 