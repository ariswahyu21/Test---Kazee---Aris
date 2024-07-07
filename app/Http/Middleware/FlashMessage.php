<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class FlashMessage
{
    public function handle(Request $request, Closure $next)
    {
        return $next($request);
    }

    public function terminate($request, $response)
    {
        if ($request->session()->has('success')) {
            $response->headers->set('X-Flash-Success', $request->session()->get('success'));
        }

        if ($request->session()->has('error')) {
            $response->headers->set('X-Flash-Error', $request->session()->get('error'));
        }
    }
}
