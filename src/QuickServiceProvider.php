<?php

namespace vendor\quick;

use Illuminate\Support\ServiceProvider;

class QuickServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Register package services
    }

    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/package.php' => config_path('package.php'),
        ]);
    }
}