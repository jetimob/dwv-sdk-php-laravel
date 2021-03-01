<?php

namespace Jetimob\DWV;

use Illuminate\Support\ServiceProvider;
use Jetimob\DWV\Console\InstallCommand;

class DWVServiceProvider extends ServiceProvider
{
    private function getConfigPath(): string
    {
        return __DIR__ . '/../config/config.php';
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register(): void
    {
        $this->mergeConfigFrom($this->getConfigPath(), 'dwv');
    }

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                $this->getConfigPath() => config_path('dwv.php'),
            ], 'config');

            $this->commands([
                InstallCommand::class,
            ]);
        }

        $this->app->bind('jetimob.dwv', function () {
            return new DWV(config('dwv'));
        });
    }
}
