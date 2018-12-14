<?php

namespace Academico2\Model\Academico;

use Illuminate\Database\Eloquent\Model;

class MateriaCorrelativa extends Model
{
    public $table = 'correlativas';
    protected $guarded = [];

    public function materiaPrerequisito(){
    	return $this->belongsToMany('Academico2\Model\Academico');
    }
}
