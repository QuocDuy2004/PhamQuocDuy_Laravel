<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class MakeProductViews extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:productviews';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create multiple product views';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $views = [
            'index',
            'edit',
            'show',
            'update',
            'trash',
            'create',
        ];

        $directory = resource_path('views/backend/banner');

        if (!File::exists($directory)) {
            File::makeDirectory($directory, 0755, true);
        }

        foreach ($views as $view) {
            $path = "{$directory}/{$view}.blade.php";

            if (!File::exists($path)) {
                File::put($path, "<!-- {$view} view -->");
                $this->info("Created view: {$path}");
            } else {
                $this->info("View already exists: {$path}");
            }
        }

        return 0;
    }
}
