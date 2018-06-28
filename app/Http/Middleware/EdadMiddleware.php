<?php

namespace App\Http\Middleware;

use Closure;

class EdadMiddleware
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
        //$request captura todo tipo de peticiones get, post o session via http
        if($request->input("edad") < 18){
            return redirect()->to("menordeedad");
        }
        return $next($request);
    }
}
