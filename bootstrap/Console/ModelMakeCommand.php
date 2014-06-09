<?php namespace Bootstrap\Console;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Str;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class ModelMakeCommand extends Command
{

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'model:make';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = "Create a new Eloquent Model";

    /**
     * Create a new model creator command.
     *
     * @param  \Illuminate\Filesystem\Filesystem $files
     *
     * @return void
     */
    public function __construct(Filesystem $files)
    {
        parent::__construct();

        $this->files = $files;
    }

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function fire()
    {
        $path = $this->getPath();

        $stub = $this->files->get(__DIR__ . '/stubs/model.stub');

        // We'll grab the class name to determine the file name. Since applications are
        // typically using the PSR-0 standards we can safely assume the classes name
        // will correspond to what the actual file should be stored as on storage.
        $file = $path . '/' . $this->input->getArgument('name') . '.php';

        $this->writeCommand($file, $stub);

        $this->call('dump-autoload');
    }

    /**
     * Write the finished command file to disk.
     *
     * @param  string $file
     * @param  string $stub
     *
     * @return void
     */
    protected function writeCommand($file, $stub)
    {
        if (!file_exists($file)) {
            $this->files->put($file, $this->formatStub($stub));

            $this->info('Model created successfully.');
        } else {
            $this->error('Model already exists!');
        }
    }

    /**
     * Format the command class stub.
     *
     * @param  string $stub
     *
     * @return string
     */
    protected function formatStub($stub)
    {
        $name = $this->input->getArgument('name');
        $stub = str_replace('{{class}}', $name, $stub);

        $table = is_null($this->option('table'))
            ? str_plural(strtolower($name))
            : $this->option('table');
        $stub = str_replace('table:name', $table, $stub);

        return $stub;
    }


    /**
     * Get the path where the command should be stored.
     *
     * @return string
     */
    protected function getPath()
    {
        $path = $this->input->getOption('path');

        if (is_null($path)) {
            return $this->laravel['path'] . '/models';
        } else {
            return $this->laravel['path.base'] . '/' . $path;
        }
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return array(
            array('name', InputArgument::REQUIRED, 'The name of the model.'),
        );
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return array(
            array('table', null, InputOption::VALUE_OPTIONAL, 'The table to be associated with the model.', null),
            array('path', null, InputOption::VALUE_OPTIONAL, 'The path where the command should be stored.', null),
        );
    }

}