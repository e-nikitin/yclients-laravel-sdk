<?php

namespace nikitin\YClientsSDK;

use Illuminate\Support\ServiceProvider;

class YClientsSDKServiceProvider extends ServiceProvider
{
    protected $defer = true;

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        $configPath = __DIR__.'/../config/yclients-laravel-sdk.php';
        $this->publishes([
            $configPath => config_path('yclients-laravel-sdk.php')
        ], 'yclients-laravel-sdk');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $configPath = __DIR__ . '/../config/yclients-laravel-sdk.php';
        $this->mergeConfigFrom($configPath, 'yclients-laravel-sdk');
        $this->app->bind(YClientsSDK::class, YClientsSDK::class);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [YClientsSDK::class];
    }
}
