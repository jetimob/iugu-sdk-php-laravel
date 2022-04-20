<?php

namespace Jetimob\Iugu;

use Illuminate\Container\Container;
use Illuminate\Support\ServiceProvider;
use Jetimob\Iugu\Console\IuguInstallPackage;

class IuguServiceProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot(): void
    {
        $src = realpath($raw = __DIR__ . '/../config/iugu.php') ?: $raw;

        if ($this->app->runningInConsole()) {
            $this->publishes([$src => config_path('iugu.php')], 'config');
            $this->commands([
                IuguInstallPackage::class,
            ]);
        }

        $this->mergeConfigFrom($src, 'iugu');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->singleton('jetimob.iugu', function (Container $app) {
            return new Iugu($app['config']['iugu'] ?? []);
        });

        $this->app->alias('jetimob.iugu', Iugu::class);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return string[]
     */
    public function provides()
    {
        return [
            'jetimob.iugu',
        ];
    }
}
