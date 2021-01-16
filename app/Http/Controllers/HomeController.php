<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Helpers\UserHelper;
use Session;

class HomeController extends Controller
{
    public function __construct(){

        $this->middleware('authMid');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request){

        $rol = Session::get('rol');

/*         var_dump($session->get('rol'));
 */        return view('home');
    }
}
