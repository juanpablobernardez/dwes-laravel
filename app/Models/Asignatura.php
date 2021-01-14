<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
    use HasFactory;
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre',
        'nombre_corto',
        'curso',
    ];

    protected $table = 'ies_asignatura';

    // Relacióm Muchos a 1 con curso
    public function tutorCurso(){
        return $this->belongsTo('App\Curso', 'curso');
    }

}
