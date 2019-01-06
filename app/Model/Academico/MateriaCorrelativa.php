<?php

namespace Academico2\Model\Academico;

use Illuminate\Database\Eloquent\Model;

class MateriaCorrelativa extends Model
{
    public $table = 'correlativas';
    protected $guarded = [];


    /**
     * No implementado, verificar
     * Retorna los datos de la materia correlativa
     */
    public function materia(){
    	return $this->belongsTo(
    		'Academico2\Model\Academico\Materia',
    	 	'id_materia_requisito'
    	);
    }
}
