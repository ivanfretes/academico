<?php

namespace Academico2\Model\Academico;

use Illuminate\Database\Eloquent\Model;

class ProcesoAlumno extends Model
{
	public $table = 'proceso_alumno';
	protected $primaryKey = 'id_proceso';
	protected $guarded = [];

	/**
	 * Retorna la materia a la que pertenece un proceso
	 */
	public function materia(){
		return $this->belongsTo(
			'Academico2\Model\Academico\Materia',
			'id_materia'
		);
	}

}
