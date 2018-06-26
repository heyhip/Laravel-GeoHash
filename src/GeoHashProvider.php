<?php

namespace Geohash;

use Illuminate\Support\ServiceProvider;

class GeoHashProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->singleton('geohash', function (){
            return new GeoHash();
        });
    }
}
