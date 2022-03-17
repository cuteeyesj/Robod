<?php

namespace Khalifa\MarketMakingBot;

use Illuminate\Support\Facades\Route;
use Illuminate\support\ServiceProvider;

//php artisan vendor:publish --provider="Khalifa\MarketMakingBot\MkmBotServiceProvider" --tag="config"
class MkmBotServiceProvider extends ServiceProvider {

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
       // dd("it works");
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'mkmpackage');
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        if ($this->app->runningInConsole()) {

            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('mkmbots.php'),
            ], 'config');


            // Export the migration
            if (! class_exists('CreateMkmBotsTable')) {
                $this->publishes([
                    __DIR__ . '/../database/migrations/CreateMkmBotsTable.php' => database_path('migrations/CreateMkmBotsTable.php'),
                    // you can add any number of migrations here
                ], 'migrations');
            }
        }
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

    }

    protected function registerRoutes()
    {
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        });
    }

    protected function routeConfiguration()
    {
        return [
            'prefix' => "blogger",
            'middleware' => ['web'],
        ];
    }
}
