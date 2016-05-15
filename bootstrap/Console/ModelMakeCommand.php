<?php namespace Bootstrap\Console;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use Schema;
use DB;

class ModelMakeCommand extends Command
{

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'make:model';

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
     * @return \Bootstrap\Console\ModelMakeCommand
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

        $this->writeModel($file, $stub);

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
    protected function writeModel($file, $stub)
    {
        $write = true;
        if (file_exists($file)) {
            $write = $this->confirm("Model already exist, are you sure you want to overwrite?", false);
        }
        if ($write) {
            $this->files->put($file, $this->formatStub($stub));
            $this->info('Model created successfully.');
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
        $className = $this->input->getArgument('name');
        $tableName = is_null($this->option('table'))
            ? str_plural(strtolower(preg_replace('/([a-z])([A-Z])/', '$1_$2', $className)))
            : $this->option('table');
        $fields = Schema::getColumnListing($tableName);

        $hide = ['password', 'secret'];
        $avoid = ['id', 'ID', 'verified', 'active'];

        $timestamps = 'true';
        $fillable = '';
        $hidden = '';
        $import = '';
        $use = '';
        $dates = '';

        $properties = '';
        if (!empty($fields)) {
            foreach ($fields as $property) {
                if ($isDate = ends_with($property, '_at')) {
                    $avoid[] = $property;
                }
                if ($is_id = ends_with($property, '_id')) {
                    $avoid[] = $property;
                }
                //$type = DB::connection()->getDoctrineColumn($tableName, $property)->getType()->getName();
                list($type, $subType) = $this->guessType($property);
                $pt = in_array($property, $hide)
                    ? '@property-write' : (
                    in_array($property, $avoid) || $isDate ? '@property-read ' : '@property      '
                    );
                $properties .= "$pt $type \${$property}$subType\n * ";
            }

            $timestamps = in_array('created_at', $fields) ? 'true' : 'false';
            $fields = array_diff($fields, $avoid);
            $hide = array_intersect($fields, $hide);

            $fillable = "'" . implode("',\n        '", $fields) . "'";

            if (in_array('deleted_at', $fields)) {
                $import = "use Illuminate\\Database\\Eloquent\\SoftDeletingTrait;\n\n";
                $use = "use SoftDeletingTrait;\n\n    protected \$dates = ['deleted_at'];\n        ";
            }
        }

        if (!empty($hide)) {
            $hidden = "'" . implode("',\n        '", $hide) . "'";
        }

        $stub = str_replace(
            [
                'class:name',
                'table:name',
                'table:timestamps',
                'table:fillable',
                'table:hidden',
                'softdelete:import',
                'softdelete:use',
                'comment:properties'
            ],
            [
                $className,
                $tableName,
                $timestamps,
                $fillable,
                $hidden,
                $import,
                $use,
                $properties
            ],
            $stub
        );

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
            array('path', null, InputOption::VALUE_OPTIONAL, 'The path where the model should be stored.', null),
        );
    }

    protected function guessType($name)
    {
        $subtype = '';
        $type = 'string';
        if (ends_with($name, '_at')) {
            //date field
            $subtype = ' {@type date}';
        } elseif (ends_with($name, ['id', 'ID'])) {
            //int
            $type = 'int   ';
        } else {
            //assume string
        }

        return [$type, $subtype];
    }
}