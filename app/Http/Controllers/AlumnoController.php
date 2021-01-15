<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;
use App\Helpers\UserHelper;

class AlumnoController extends Controller
{
    public function index(Request $request, $rol, $id){
        $alumnos = Alumno::all();
        $user = UserHelper::getUser();

        return view('lista-alumnos', ['alumnos' => $alumnos, 'rol' => $rol, 'user' => $user]);
    }
}
