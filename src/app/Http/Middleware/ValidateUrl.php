<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Validator;

class ValidateUrl
{
    public function handle($request, Closure $next)
    {
        if ($request->is('shorten')) {
            $inputKey = 'url';

            $validator = Validator::make($request->all(), [
                $inputKey => 'required|string',
            ]);

            if ($validator->fails()) {
                throw new \Exception('Validation Error');
            }
        }

        return $next($request);
    }
}
