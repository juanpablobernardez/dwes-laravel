<?php
namespace App\Helpers;
use Illuminate\Support\Facades\DB;
use App\Models\Alumno;
use App\Models\Profesor;



class UserHelper{

    public static function getuser($id,$rol){
        if($rol=='alumno'){
            $user = Alumno::find($id);
        }
        if($rol=='profesor'){
            $user = Profesor::find($id);
        }

        return $user;

    }

}
