<?php

namespace App\Http\Middleware;

use App\Http\Controllers\Controller;
use Closure;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
use Illuminate\Routing\Console\MiddlewareMakeCommand;

class CheckTitle extends Middleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $title = $request->title;
        if (preg_match('~[0-9]+~', $title)) {
            dd("Tieu de khoong duoc chua so");
        }
        return $next($request);
    }
}
