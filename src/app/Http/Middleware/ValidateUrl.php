<?php

namespace App\Http\Middleware;

use Closure;

class ValidateUrl
{
    public function handle($request, Closure $next)
    {
        if ($request->is('shorten')) {
            $inputKey = 'url';

            $request->validate([
                $inputKey => 'required|string',
            ]);
        }

        return $next($request);
    }
}
