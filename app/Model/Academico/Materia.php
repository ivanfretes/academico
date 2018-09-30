<?php

namespace KuaaSys\Model\Academico;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    public $table = 'materias';
    protected $primaryKey = 'id_materia';
    public $timestamps = false;

    protected $fillable = [ 'id_carrera', 'nombre' ];
    
}
