<?php

namespace Pnlinh\GoogleDistance\Providers;

use Illuminate\Contracts\Container\Container;
use Illuminate\Support\ServiceProvider;
use Pnlinh\GoogleDistance\DistanceApi;

class GoogleDistanceServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/distance.php' => config_path('distance.php'),
        ], 'distance-config');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(DistanceApi::class, function (Container $app) {
            return new DistanceApi($app['config']['distance.api_key']);
        });
    }
}