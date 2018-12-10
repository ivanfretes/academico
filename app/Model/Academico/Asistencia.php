<?php

namespace Academico2\Model\Academico;

use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    public $table = 'asistencia_alumno';
    protected $primaryKey = 'id_asistencia_alumno';

    protected $fillable = [
    	'observacion', 'id_horario_materia', 'id_alumno'
    ];

}
