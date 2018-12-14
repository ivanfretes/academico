<?php

namespace Academico2\Model\Academico;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
	protected $table = 'carreras';
	public $primaryKey = 'id_carrera';
	// public $timestamps = false;


	//protected $fillable = ["alumno_nombres", "alumno_apellidos"];
	protected $guarded = array();


	/**
	 * Retorna el listado de materias por carrera
	 */
	public function materias(){
		return $this->hasMany(
			'Academico2\Model\Academico\Materia',
			'id_carrera'
		);
	}
}
