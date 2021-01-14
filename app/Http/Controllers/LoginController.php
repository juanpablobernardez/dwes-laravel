<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Alumno;
use App\Models\Profesor;

class LoginController extends Controller
{
    public function showLoginForm(){
        return view('login');
    }

    public function auth(Request $request){

        $usuario = $request->input('usuario');
        $password = $request->input('pass');
        $hash =  md5($password);

        $alumno = Alumno::where([
            ['usuario', '=', $usuario],
            ['pass','=',$hash],
        ])->first();

        if($alumno){
            Auth::login($alumno);
            $request->session()->put('rol', 'alumno');
            return redirect()->route('home');
        }else{
            $profesor = Profesor::where([
                ['usuario', '=', $usuario],
                ['pass','=',$hash],
            ])->first();

            if($profesor){
                Auth::login($profesor);
                $request->session()->put('rol', 'profesor');
                return redirect()->route('home');
            }

            /* var_dump(Auth::user());

            var_dump($alumno);
            var_dump($profesor); die(); */


        }

        return back()->withErrors([
            'usuario' => 'Credenciales incorrectas',
        ]);

    }


    public function logout(Request $request){
        /* Auth::logout(); */
        $request->session()->invalidate();
        $request->session()->regenerateToken();
/*         var_dump(Auth::user());
        var_dump($request->session()->has('alumno'));
        var_dump($request->session()->has('profesor')); */
        /* die(); */
        return redirect('/');
    }
}
