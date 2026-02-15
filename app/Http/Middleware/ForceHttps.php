<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class ForceHttps
{
    public function handle(Request $request, Closure $next)
    {
        // Always force HTTPS in production to ensure asset URLs are generated correctly
        if (env('APP_ENV') !== 'local') {
            URL::forceScheme('https');
        }

        return $next($request);
    }
}
