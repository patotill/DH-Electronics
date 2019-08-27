<?php

namespace App\Http\Middleware;

use Closure;

class usuarioAdmin
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
      $usuario_actual = \Auth::user();
      if($usuario_actual->typeUser != 1){
    
        return redirect()->route('home', ['msj' => 'Sin privilegios']);

      }
        return $next($request);
    }
}
