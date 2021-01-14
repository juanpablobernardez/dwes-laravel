<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre',
    ];

    protected $table = 'ies_curso';

    // Relacióm 1 a 1 con curso
    public function asignaturas(){
        return $this->hasMany('App\Asignatura');
    }
}
