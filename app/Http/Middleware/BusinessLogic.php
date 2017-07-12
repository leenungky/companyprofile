<?php

namespace App\Http\Middleware;

use Closure;

class BusinessLogic
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {   
        $cookie = "";        
        if (isset($_COOKIE["shop"]))
            $cookie = $_COOKIE["shop"];
        // print_r($cookie);
        // die("a");
        $request->merge(array("cookie" => $cookie));
        return $next($request);
    }
}
