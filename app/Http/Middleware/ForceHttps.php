<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class ForceHttps
{
    public function handle(Request $request, Closure $next)
    {
        if (app()->environment('local')) {
            return $next($request);
        }

        // Force the request to report HTTPS (fixes URL generation when behind reverse proxy)
        $request->server->set('HTTPS', 'on');
        $request->server->set('REQUEST_SCHEME', 'https');
        $request->server->set('SERVER_PORT', '443');

        URL::forceScheme('https');

        return $next($request);
    }
}
