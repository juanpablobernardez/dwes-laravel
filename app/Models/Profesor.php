<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class Profesor extends Authenticatable
{
    use HasFactory, Notifiable;

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'usuario',
        'pass',
        'nombre',
        'apellidos',
        'email',
        'curso',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'pass',
    ];

    protected $primaryKey = 'id';
    protected $table = 'ies_profesor';



    public function getAuthPassword(){
        return $this->pass;
    }

    public function tutorCurso(){
        return $this->hasOne('App\Curso', 'tutor_curso');
    }
}
