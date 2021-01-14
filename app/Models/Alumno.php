<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class Alumno extends Authenticatable
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
        'telefono',
        'email',
        'curso',
        'activo'
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
    protected $table = 'ies_alumno';

    public function getAuthPassword(){
        return $this->pass;
    }

    // Relación 1 a 1 con Curso
    public function curso(){
        return $this->hasOne('App\Curso', 'curso');
    }

}
