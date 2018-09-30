<?php

namespace KuaaSys\Model\Common;

use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    public $table = 'solicitudes';
	protected $primaryKey = 'id_solicitud';


	/*protected $fillable = [
		'fecha_examen', 'anulado', 'examen_ref'
		'examen_num', 'puntaje_examen', 'hora_inicio','hora_fin',
		'id_materia_x_carrera', 'id_docente', 'id_funcionario'
	]; */
}
