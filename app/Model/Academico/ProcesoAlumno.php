<?php

namespace KuaaSys\Model\Academico;

use Illuminate\Database\Eloquent\Model;

class ProcesoAlumno extends Model
{
	public $table = 'proceso_alumno';
	protected $primaryKey = 'id_proceso';


	protected $fillable = [
		'promedio_parciales', 'promedio_finales', 'promedio_tareas'
		'promedio_total', 'id_materia_x_carrera'
	]; 
}
