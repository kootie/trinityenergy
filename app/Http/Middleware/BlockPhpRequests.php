<?php

namespace App\Http\Middleware;

use Closure;

class BlockPhpRequests
{
    public function handle($request, Closure $next)
    {
        // Check if the requested URL ends with ".php"
        if (str_ends_with($request->getPathInfo(), '.php')) {
            abort(403); // or redirect, log, etc. based on your requirements
        }

        return $next($request);
    }
}
