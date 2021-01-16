<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Alumno;
use App\Models\Profesor;

class LoginController extends Controller
{
    public function showLoginForm(){
        return view('login');
    }

    public function auth(Request $request){

        $validator = Validator::make($request->all(), [
            'usuario' => 'required',
            'pass' => 'required']);

        $validator->validate();

        /* if ($validate->fails()) {
            var_dump($validate->errors());die();
            $fail = $validate->errors();
            return redirect('login')->with($fail);
        } */


        $usuario = $request->input('usuario');
        $password = $request->input('pass');
        $hash =  md5($password);


        $alumno = Alumno::where([
            ['usuario', '=', $usuario],
            ['pass','=',$hash],
        ])->first();

        if($alumno){
            config(['auth.defaults.guard' => 'alumno']);
            Auth::login($alumno);
            $request->session()->put('rol', 'alumno');
            return redirect()
                        ->route('home'/* , [
                                    'id' => $alumno->id,
                                    'rol' => 'alumno' ] */);

        }else{
            $profesor = Profesor::where([
                ['usuario', '=', $usuario],
                ['pass','=',$hash],
            ])->first();

            if($profesor){
                config(['auth.defaults.guard' => 'profesor']);
                Auth::login($profesor);
                $request->session()->put('rol', 'profesor');
                return redirect()
                        ->route('home'/* , [
                                    'id' => $profesor->id,
                                    'rol' => 'profesor'] */);
            }

        }


        return back()->withErrors([
            'login' => 'Credenciales incorrectas',
        ]);

    }


    public function logout(Request $request){

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
