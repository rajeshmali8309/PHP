<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class MakeView extends Command
{
    // Command signature (input structure)
    protected $signature = 'make:view {name}';

    // Command description
    protected $description = 'Create a new Blade view file';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        // Get the view name from input
        $name = $this->argument('name');

        // Define the file path for the view
        $path = resource_path("views/{$name}.blade.php");

        // Check if the file already exists
        if (File::exists($path)) {
            $this->error("View {$name} already exists!");
            return;
        }

        // Create the new Blade view file
        File::put($path, '<!-- New Blade View -->');
        $this->info("View {$name} created successfully at {$path}.");
    }
}
