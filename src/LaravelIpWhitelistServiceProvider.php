<?php

namespace Alessandrodorazio\LaravelIpWhitelist;

use Alessandrodorazio\LaravelIpWhitelist\Http\Middleware\IpWhitelist;
use Illuminate\Routing\Router;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelIpWhitelistServiceProvider extends PackageServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('ip-whitelist.php'),
            ], 'config');
        }

        $router = $this->app->make(Router::class);
        $router->aliasMiddleware('only-ip-whitelist', IpWhitelist::class);
    }

    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-ip-whitelist');
    }
}
