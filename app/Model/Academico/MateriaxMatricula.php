<?php

namespace Academico2\Model\Academico;

use Illuminate\Database\Eloquent\Model;

class MateriaxMatricula extends Model
{
    public $table = 'materia_x_matriculacion';
    protected $primaryKey = 'id_materia_x_matriculacion';
    public $timestamps =  false;

    protected $fillable = [
    	'id_matriculacion', 
    	'id_materia_x_matriculacion', 
    	'id_materia_x_carrera',
    	'estado'
    ];

}


