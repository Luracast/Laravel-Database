<?php
namespace Bootstrap\Console;

use Illuminate\Console\Command;
use Psy\Configuration;
use Psy\Shell;
use Psy\VersionUpdater\Checker;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;

class TinkerCommand extends Command
{
    /**
     * artisan commands to include in the tinker shell.
     *
     * @var array
     */
    protected $commandWhitelist = [
        'clear-compiled',
        'down',
        'env',
        'inspire',
        'migrate',
        'optimize',
        'up',
    ];
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'tinker';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Interact with your application';

    /**
     * Execute the console command.
     *
     * @return integer
     */
    public function handle()
    {
        $this->getApplication()->setCatchExceptions(false);
        $config = new Configuration;
        $config->setUpdateCheck(Checker::NEVER);
        $config->getPresenter()->addCasters(
            $this->getCasters()
        );
        $shell = new Shell($config);
        $shell->addCommands($this->getCommands());
        $shell->setIncludes($this->argument('include'));
        if ($code = $this->option('execute')) {
            try {
                $shell->execute($code);
            } finally {
                //$loader->unregister();
            }

            return 0;
        }
        try {
            return $shell->run();
        } finally {
            // $loader->unregister();
        }
    }

    /**
     * Get artisan commands to pass through to PsySH.
     *
     * @return array
     */
    protected function getCommands()
    {
        $commands = [];
        foreach ($this->getApplication()->all() as $name => $command) {
            if (in_array($name, $this->commandWhitelist)) {
                $commands[] = $command;
            }
        }

        return $commands;
    }

    /**
     * Get an array of Laravel tailored casters.
     *
     * @return array
     */
    protected function getCasters()
    {
        return [
            'Illuminate\Foundation\Application' => 'Bootstrap\Console\IlluminateCaster::castApplication',
            'Illuminate\Support\Collection' => 'Bootstrap\Console\IlluminateCaster::castCollection',
            'Illuminate\Database\Eloquent\Model' => 'Bootstrap\Console\IlluminateCaster::castModel',
        ];
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return [
            ['include', InputArgument::IS_ARRAY, 'Include file(s) before starting tinker'],
        ];
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return [
            ['execute', null, InputOption::VALUE_OPTIONAL, 'Execute the given code using Tinker'],
        ];
    }
}
