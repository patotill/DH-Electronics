<?php

namespace App\Http\Middleware;

use Closure;
use App\Cart;
use App\Product;

class carrito
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

      if (!session()->has('cart')) {
        session()->put('cart', Cart::create([
          'items' => 0,
          'price' => 0,
          'user_id' => auth()->id(),
        ]));
      }



      return $next($request);
    }
}
