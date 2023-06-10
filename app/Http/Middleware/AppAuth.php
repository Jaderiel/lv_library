<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AppAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $appToken = $request->header('APP-TOKEN');
        if ($appToken != env('APP_TOKEN')) {
            return response()->json(['error' => 'Invalid Request!'], 401);
        }

        $request->attributes->add(['is_mobile_app' => true]);

        return $next($request);
    }
}
