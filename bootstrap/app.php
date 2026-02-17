<?php

use App\Http\Middleware\HandleInertiaRequests;
use App\Http\Middleware\ForceHttps;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        // Trust reverse proxy headers (e.g. X-Forwarded-Proto) so Laravel sees HTTPS
        $middleware->trustProxies(at: '*');


        $middleware->web(append: [
            HandleInertiaRequests::class,
            ForceHttps::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
