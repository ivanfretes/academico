<?php

namespace Academico2\Model\Academico;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
	protected $table = 'alumnos';
	public $primaryKey = 'id_alumno';
	protected $guarded = array();


	/**
	 * Informacion de la carrera que sigue el alumno
	 */
	public function carrera(){
		return $this->belongsTo(
			'Academico2\Model\Academico\Carrera',
			'id_carrera'
		);
	}


	/**
	 * Un Alumno puede tener 1 o más materias
	 * Retorna las matriculaciones de un alumno, ( La idea es vincular el 
	 * listado de materias en la que se matriculo un alumno )
	 */
	public function matriculaciones(){
		return $this->belongsTo(
			'Academico2\Model\Academico\Matriculacion',
			'id_alumno'
		);
	}

	/**
	 * Un alumno puede tener 1 * más examenes
	 * Retorna el listado de examenes de un alumno
	 */
	public function examenes(){
		return $this->hasMany(
			'Academico2\Model\Academico\Examen',
			'id_alumno'
		);
	}

	/**
	 * No Implementado
	 * Un alumno puede visualizar 1 o más cuotas
	 */
	public function cuotas(){

	}


	/**
	 * Retorna el listado de asistencias de un alumno
	 */
	public function asistencias(){
		return $this->hasMany(
			'Academico2\Model\Academico\AsistenciaClase',
			'id_alumno'
		);
	}


	/**
	 * Retorna los datos del que coinciden en persona, con el alumno
	 */
	public function persona(){
		return $this->belongsTo('Academico2\Model\Common\Persona','ci');
	}


	/**
	 * Retorna los procesos del lumno, 
	 * (si pasa o no de curso, y el promedio de examenes y actividades)
	 */
	public function procesos(){
		return $this->hasMany(
			'Academico2\Model\Academico\ProcesoAlumno',
			'id_alumno'
		);
	}
}
