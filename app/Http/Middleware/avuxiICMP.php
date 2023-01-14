<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Ixudra\Curl\Facades\Curl;
class avuxiICMP
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
        Curl::to('https://m.avuxicdn.com/v3/s/639aee80a904e838e65ed382/en')->get();
        return $next($request);
    }
}
