<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class testProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        return "Nitu";
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
