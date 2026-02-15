<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;
use Inertia\Inertia;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Inertia::setRootView('app');

        // Force HTTPS for all URL generation in non-local environments (fixes mixed content behind reverse proxy)
        if (! $this->app->environment('local')) {
            URL::forceScheme('https');
        }
    }
}
