<?php

namespace KuaaSys\Model\Academico;

use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{
    protected $table = 'inscripciones';
    public $primaryKey = 'id_inscripcion';
    public $timestamps = false;
	
	protected $guarded = array();


	// Informacion del alumno
	public function alumno(){
		return $this->belongsTo(
			'KuaaSys\Model\Academico\Alumno', 
			'id_alumno'
		);
	}

	// Informacion de la carrera
	public function carrera(){
		return $this->belongsTo(
			'KuaaSys\Model\Academico\Carrera', 
			'id_carrera'
		);
	}
}
