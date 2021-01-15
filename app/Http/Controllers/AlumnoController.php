<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;
use App\Helpers\UserHelper;
use Session;

class AlumnoController extends Controller
{
    public function index(Request $request){
        $alumnos = Alumno::all();
        $rol = Session::get('rol');
        $user = $request->user();

        return view('lista-alumnos', ['alumnos' => $alumnos, 'rol' => $rol, 'user' => $user]);
    }
}
