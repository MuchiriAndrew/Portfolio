<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class ForceHttps
{
    public function handle(Request $request, Closure $next)
    {
        if (!$request->secure() && env('APP_ENV') !== 'local') {
            // return redirect()->secure($request->getRequestUri());
            URL::forceScheme('https');
        }

        return $next($request);
    }
}
