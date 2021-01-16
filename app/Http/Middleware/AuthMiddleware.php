<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;


class AuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next){
        $rol = Session::get('rol');
        if($rol){
            config(['auth.defaults.guard' => $rol]);
            if($request->user()){
                return $next($request);
            }else{
                return redirect('/');
            }
        }
        return redirect('/');

        /* $rol = Session::get('rol');
        $id = $request->user() ? $request->user()->id : 0;
        $routeRol = $request->route('rol');
        $routeId = $request->route('id');

        if($id==$routeId && $rol==$routeRol) */


    }
}
