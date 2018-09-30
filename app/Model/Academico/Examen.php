<?php

namespace KuaaSys;

use Illuminate\Database\Eloquent\Model;

class Examen extends Model
{
	public $table = 'examenes';
	protected $primaryKey = 'id_examen';


	protected $fillable = [
		'fecha_examen', 'anulado', 'examen_ref'
		'examen_num', 'puntaje_examen', 'hora_inicio','hora_fin',
		'id_materia_x_carrera', 'id_docente', 'id_funcionario'
	]; 
}
