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

        // Force HTTPS and base URL in production so backend (Filament) and frontend assets load correctly behind a reverse proxy (e.g. CapRover)
        if (! $this->app->environment('local')) {
            URL::forceScheme('https');
            $appUrl = rtrim((string) config('app.url'), '/');
            // If APP_URL is literal "${APP_URL}" (e.g. unexpanded in CapRover/Docker env), use the request URL so Filament assets load
            if ($appUrl === '' || $appUrl === '${APP_URL}' || str_contains($appUrl, '${')) {
                try {
                    $request = $this->app->make('request');
                    if ($request && $request->getHttpHost()) {
                        $appUrl = 'https://' . $request->getHttpHost();
                    }
                } catch (\Throwable) {
                    // No request (e.g. console); keep existing or leave empty
                }
            }
            if ($appUrl !== '' && ! str_contains($appUrl, '${')) {
                if (str_starts_with($appUrl, 'http://')) {
                    $appUrl = 'https://' . substr($appUrl, 7);
                }
                URL::forceRootUrl($appUrl);
            }
        }
    }
}
