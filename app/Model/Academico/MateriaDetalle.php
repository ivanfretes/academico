<?php

namespace Academico2\Model\Academico;

use Illuminate\Database\Eloquent\Model;

class MateriaDetalle extends Model
{
    public $table = 'materia_detalle';
    protected $primaryKey = 'id_materia_detalle';
    protected $guarded = [];

   	
   	/**
     * Retorna información de la carrera
     */
    public function materia(){
        return $this->belongsTo(
            'Academico2\Model\Academico\Materia',
            'id_materia'
        );
    }
}
