<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;



class HomeController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth.mid');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        $rol = Session::get('rol');
        return view('home', [
            'rol' => $rol
        ]);
    }
}
