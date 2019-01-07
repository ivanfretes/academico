<?php

namespace Academico2\Model\Academico;

use Illuminate\Database\Eloquent\Model;

class Matriculacion extends Model
{
    protected $table = 'matriculaciones';
	protected $guarded = array();
	

	/**
	 * Relaciona informacion de la matriculacion con el alumno
	 */
	public function alumno(){
		return $this->belongsTo(
			'Academico2\Model\Academico\Alumno',
			'id_alumno'
		);
	}


	/**
	 * Relaciona informacion de la matriculacion con la materia
	 */
	public function materia(){
		return $this->belongsTo(
			'Academico2\Model\Academico\Materia',
			'id_materia'
		);
	}
}
