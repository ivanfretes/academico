<?php

namespace Academico2\Model\Academico;

use Illuminate\Database\Eloquent\Model;

class HorarioMateria extends Model
{
    public  $table  = 'horario_materia';
    protected $primaryKey = 'id_horario_materia';
    public $timestamps = false;

    protected $fillable = [
    	'hora_inicio', 'hora_fin', 'dia', 'id_materia_x_semestre'
    ];

}
