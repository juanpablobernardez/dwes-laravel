<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Helpers\UserHelper;


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
    public function index($rol, $id){

        $user = UserHelper::getUser($id,$rol);
        return view('home', [
            'rol' => $rol,
            'user' => $user
        ]);
    }
}
