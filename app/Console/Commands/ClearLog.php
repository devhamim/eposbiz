<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use File;

class ClearLog extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:clear-log';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clear the Laravel log file';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $logFile = storage_path('logs/laravel.log');
        if (File::exists($logFile)) {
            File::put($logFile, '');
            $this->info('Log file has been cleared!');
        } else {
            $this->info('Log file does not exist!');
        }
    }
}
