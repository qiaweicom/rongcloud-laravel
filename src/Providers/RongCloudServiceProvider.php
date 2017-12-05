<?php

namespace QiaWeiCom\RongCloud\Providers;

use Illuminate\Support\ServiceProvider;

class RongCloudServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $path = realpath(__DIR__.'/../../config/config.php');

        $this->publishes([$path => config_path('rong_cloud.php')], 'config');
        $this->mergeConfigFrom($path, 'rong_cloud');
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
