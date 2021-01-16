<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;
use App\Helpers\UserHelper;
use Session;
use Yajra\DataTables\Facades\DataTables;

class AlumnoController extends Controller
{
    public function index(Request $request){

        $alumnos = Alumno::all();
        return view('profesor.lista-alumnos' ,  ['alumnos' => $alumnos]);

    }

    public function create(Request $request){

        return view('profesor.alta-alumno');

    }


}
