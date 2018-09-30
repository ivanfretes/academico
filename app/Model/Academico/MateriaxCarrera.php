<?php

namespace KuaaSys\Model\Academico;

use Illuminate\Database\Eloquent\Model;

class MateriaxCarrera extends Model
{
    public $table = 'materia_x_carrera';
    protected $primaryKey = 'id_materia_x_carrera';

    protected $fillable = [
    	'id_materia', 'id_carrera','creditos'
   	];

   	public $timestamps = false;
}
