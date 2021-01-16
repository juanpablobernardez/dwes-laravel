<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;


class ProfesorMiddleware
{
    // Comprueba que el usuario identificado sea un profesor

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next){

        $rol = Session::get('rol');

        if($rol && $rol == 'profesor'){
            config(['auth.defaults.guard' => $rol]);
            if($request->user()){
                return $next($request);
            }else{
                return redirect('/');
            }
        }
        return redirect('/');

        /* if($rol=='profesor'){
            $id = $request->user() ? $request->user()->id : 0;
            $routeRol = $request->route('rol');
            $routeId = $request->route('id');
            if($id==$routeId  && $rol==$routeRol) {
                return $next($request);
            }else{
                return redirect('/');
            }
        }else{
            return redirect('/');
        } */

    }
}
