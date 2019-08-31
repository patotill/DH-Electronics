<?php

namespace App\Http\Middleware;

use Closure;

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

        if (!session()->has('cart')) {
            $cart = Cart::create([
            'user_id' => auth()->id(),
            'items' => 0,
            'price' => 0
        ]);

            session()->put('cart', $cart);
        }
      return $next($request);
    }
}
