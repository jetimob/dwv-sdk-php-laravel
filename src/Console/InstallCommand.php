<?php

namespace Jetimob\DWV\Console;

use Illuminate\Console\Command;
use Jetimob\DWV\DWVServiceProvider;

class InstallCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'dwv:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Publishes DWV configuration files';


    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $this->info('Publishing DWV configuration file.');
        $this->call('vendor:publish', [
            '--provider' => DWVServiceProvider::class,
            '--tag'      => 'config'
        ]);
        $this->output->success('Configuration file published!');
    }
}
