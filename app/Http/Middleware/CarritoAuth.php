<?php

namespace App\Http\Middleware;

use Closure;


class CarritoAuth
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
      if (!auth()->id()) {

           $mensaje = true;
           return redirect()->route('login')->with(['mensaje'=> $mensaje]);

           }
      return $next($request);
    }
}
