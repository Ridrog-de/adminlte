<?php

namespace Ridrog\AdminLte;

use Illuminate\Support\ServiceProvider;
use Ridrog\AdminLte\Console\MakeViewCommand;

class AdminLteServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/Views', 'adminlte');

        $this->publishes([
            __DIR__.'/config.php' => config_path('adminlte.php'),
        ], 'adminlte-config');

        $this->publishes([
            __DIR__.'/Views' => resource_path('views/vendor/adminlte'),
        ], 'adminlte-views');

        if ($this->app->runningInConsole()) {
            $this->commands([
                MakeViewCommand::class,
            ]);
        }
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/config.php', 'adminlte'
        );
    }
}
