<?php

namespace KuaaSys\Model\Academico;

use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{
    protected $table = 'inscripciones';
    public $primaryKey = 'id_inscripcion';
    public $timestamps = false;
	protected $guarded = array();
}
