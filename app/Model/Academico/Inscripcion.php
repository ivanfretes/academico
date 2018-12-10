<?php

namespace Academico2\Model\Academico;

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
			'Academico2\Model\Academico\Alumno', 
			'id_alumno'
		);
	}

	// Informacion de la carrera
	public function carrera(){
		return $this->belongsTo(
			'Academico2\Model\Academico\Carrera', 
			'id_carrera'
		);
	}
}
