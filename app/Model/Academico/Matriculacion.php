<?php

namespace KuaaSys\Model\Academico;

use Illuminate\Database\Eloquent\Model;

class Matriculacion extends Model
{
    protected $table = 'matriculaciones';
    public $primaryKey = 'id_matriculacion';
    //public $timestamps = false;
	protected $guarded = array();
}
