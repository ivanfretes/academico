<?php

namespace Academico2\Model\Academico;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
	protected $table = 'alumnos';
	public $primaryKey = 'id_alumno';
	protected $guarded = array();


	/*public function carrera(){
		$this->hasToMany('Academico2\Model\Academico\Inscripcion','id_alumno');
	}*/


	/**
	 * Un alumno, puede tener 1 o más carreras
	 */
	public function carreras(){

	}


	/**
	 * Un Alumno puede tener 1 o más materias
	 */
	public function materias(){

	}

	/**
	 * Un alumno puede tener 1 * más examenes
	 */
	public function examenes(){

	}

	/**
	 * Un alumno puede visualizar 1 o más cuotas
	 */
	public function cuotas(){

	}



	public function asistencia(){
		
	}


	/**
	 * Retorna los datos del que coinciden en persona, con el alumno
	 */
	public function persona(){
		return $this->belongsTo('Academico2\Model\Common\Persona','ci');
	}
}
