<?php

namespace MyVendor\TestAdmin;

use Illuminate\Support\ServiceProvider;

class TestAdminServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'testadmin');

        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        $this->publishes([
            __DIR__.'/../config/testadmin.php' => config_path('testadmin.php'),
        ], 'config');   
    }
}