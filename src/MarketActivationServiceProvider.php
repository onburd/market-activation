<?php

namespace Onburd\MarketActivation;

use Illuminate\Support\ServiceProvider;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Database\Eloquent\Factory as EloquentFactory;

class MarketActivationServiceProvider extends ServiceProvider
{
    public function boot()
    {
        //$this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadRoutesFrom(__DIR__ . '/routes/api.php');
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
        /*$this->mergeConfigFrom(
            __DIR__ . '/config/config.php',
            'config'
        );*/

        $this->publishes([
            __DIR__ . '/Filament' => app_path('Filament/Resources') ,
        ], 'market-activation');

        $this->app->booted(function () {
            //$schedule = $this->app->make(Schedule::class);
            //$schedule->command('process:method')->everyMinute();
        });
    }

    protected function registerEloquentFactoriesFrom($path)
    {
        $this->app->make(EloquentFactory::class)->load($path);
    }

    public function register()
    {
        $this->commands([
            //'Onburd\MarketActivation\Commands\ProcessCommand',
        ]);
    }
}
