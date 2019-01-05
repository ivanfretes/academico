<?php

namespace Academico2\Model\Common;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
	protected $table = 'personas';
	public $primaryKey = 'ci';

	protected $guarded = array();
	

	/**
	 * Listado de inscripciones, de una persona,
	 * cada inscripcion, se representa como el modelo
	 * @return Academico2\Model\Academico\Alumno
	 */
	public function inscripciones(){
		return $this->hasMany(
			'Academico2\Model\Academico\Alumno',
			'ci'
		);
	}


	public function empleos(){

	}


	
}
