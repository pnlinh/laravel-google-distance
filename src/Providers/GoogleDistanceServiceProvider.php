<?php

namespace Pnlinh\GoogleDistance\Providers;

use Illuminate\Contracts\Container\Container;
use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;
use Pnlinh\GoogleDistance\GoogleDistance;

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
        $this->app->singleton('google-distance', function (Container $app) {
            return new GoogleDistance($app['config']['distance.api_key']);
        });

        $this->app->booting(function () {
            $loader = AliasLoader::getInstance();
            $loader->alias('GoogleDistance', \Pnlinh\GoogleDistance\Facades\GoogleDistance::class);
        });
    }
}
