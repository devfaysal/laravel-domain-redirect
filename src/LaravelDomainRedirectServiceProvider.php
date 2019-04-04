<?php

namespace Devfaysal\LaravelDomainRedirect;

use Illuminate\Support\ServiceProvider;
use Devfaysal\LaravelDomainRedirect\Middleware\DomainRedirect;

class LaravelDomainRedirectServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([__DIR__.'/../config/laravel-domain-redirect.php' => config_path('laravel-domain-redirect.php')], 'domainRedirect');
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {

        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/laravel-domain-redirect.php', 'laravel-domain-redirect');

        $router = $this->app['router'];

        if (method_exists($router, 'middleware')) {
            $registerMethod = 'middleware';
        } elseif (method_exists($router, 'aliasMiddleware')) {
            $registerMethod = 'aliasMiddleware';
        } else {
            return;
        }

        $router->$registerMethod('domainRedirect', \Devfaysal\LaravelDomainRedirect\Middleware\DomainRedirect::class);
    }
}
