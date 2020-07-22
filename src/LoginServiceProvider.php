<?php

namespace Sirikoon\Manual;

use Illuminate\Support\ServiceProvider;

class LoginServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Sirikoon\Manual\LoginController');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->loadMigrationsFrom(__DIR__.'/database');
        $this->loadViewsFrom(__DIR__.'/views', 'login');
        $this->publishes([
            dirname(__DIR__).'/resources/views' => \base_path('resources/views/Sirikoon/Manual'),
        ]);
        $this->publishes([
            dirname(__DIR__).'/database/migrations' => database_path('migrations')
        ], 'migrations');
    }
}
