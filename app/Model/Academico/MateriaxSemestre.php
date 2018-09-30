<?php

namespace KuaaSys\Model\Academico;

use Illuminate\Database\Eloquent\Model;

class MateriaxSemestre extends Model
{
    public $table = 'materia_x_semestre';
    protected $primaryKey = 'id_materia_x_semestre';

    protected $fillable = [
    	'id_materia_x_carrera', 'id_docente','seccion','cupo','turno','cant_inscriptos'
   	];

   	public $timestamps = false;
}
