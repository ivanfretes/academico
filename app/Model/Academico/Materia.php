<?php

namespace Academico2\Model\Academico;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    public $table = 'materias';
    protected $primaryKey = 'id_materia';
    protected $guarded = [];
    

    /**
     * Retorna el listado de materias pre requisitos, o correlativas de orden
     * inferior, es decir, son necesarias para 
     */
    public function materiasRequeridas(){
    	return $this->hasMany(
			'Academico2\Model\Academico\MateriaCorrelativa',
			'id_materia_padre'
		);
    }


    /**
     * Retorna el listado de asistentes por materias
     */
    public function asistentes(){
    	return $this->hasMany(
			'Academico2\Model\Academico\AsistenciaClase',
			'id_materia'
		);
    }
    
}
