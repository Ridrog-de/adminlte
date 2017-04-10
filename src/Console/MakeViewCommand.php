<?php

namespace Ridrog\AdminLte\Console;

use Illuminate\Console\Command;

class MakeViewCommand extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:view:adminlte {pathName}
                    {--basic : Only a basic view}
                    {--force : Force the copy}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Make a View for adminlte';

    /**
     * The Views
     *
     * @var array
     */
    protected $views = [
        'full' => 'full.blade.php',
        'basic' => 'basic.blade.php',
    ];

    protected $path;

    protected $file;


    /**
     * Execute the console command.
     *
     * @return void
     */
    public function fire()
    {
        // Strip the argument
        $this->parsePathName()
            ->parseFileName()
            ->startCopy();

    }

    protected function parsePathName()
    {
        $parts = explode(".", $this->argument('pathName'));
        $length = sizeof($parts);
        if($length === 1){
            $this->path = $this->argument('pathName').'.blade.php';

            return $this;
        }

        $file = array_pop($parts);

        $directories = implode("/", $parts);

        $this->path = $directories . '/' . $file.'.blade.php';

        $this->createDirectories($directories);

        return $this;

    }


    /**
     * Make the directories for the view
     *
     * @param $directories
     *
     */
    protected function createDirectories($directories)
    {
        if (! is_dir(resource_path('views/'.$directories))) {
            mkdir(resource_path('views/'.$directories), 0755, true);
        }
    }

    /**
     * Get the Filename / The View that should be copied
     *
     * @return $this
     */
    protected function parseFileName()
    {
        if (! $this->option('basic')) {
            $this->file = $this->views['full'];

            return $this;
        }

        $this->file = $this->views['basic'];

        return $this;
    }

    /**
     * Copy the view with the right name to the right path
     *
     * @return $this
     */
    protected function startCopy()
    {
        if ($this->viewExist() && !$this->forceViewCreation()) {
            if ($this->confirm("The [{$this->path}] view already exists. Do you want to replace it?")) {

                $this->copyView();
                $this->info('I have overwritten the View for you, Master');

            } else {

                $this->info('Ohhh .... I don\'t touch your cool views, Master');

            }

        } elseif($this->forceViewCreation()) {{

            $this->copyView();
            $this->info('May the force be with you, Master');

        }
        } else {

            $this->copyView();
            $this->info('Created a new View for you, Master');

        }

        return $this;
    }


    /**
     * Copy the view to the directories
     */
    protected function copyView()
    {
        copy(
            __DIR__ . '/Views/'.$this->file,
            resource_path('views/'.$this->path)
        );
    }

    /**
     * Check if a view already exist
     *
     * @return bool
     */
    protected function viewExist()
    {
        return file_exists(resource_path('views/'.$this->path));
    }

    /**
     *  Check if a force flag is set
     *
     * @return array|string|false
     */
    protected function forceViewCreation()
    {
        return $this->option('force');
    }



}
