<?php

namespace Academico2\Model\Academico;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
	protected $table = 'carreras';
	public $primaryKey = 'id_carrera';
	public $timestamps = false;


	//protected $fillable = ["alumno_nombres", "alumno_apellidos"];
	protected $guarded = array();


	/**
	 * Retorna el listado de alumnos por carrera
	 */
	public function alumnos(){
		
	}
}
