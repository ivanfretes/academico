<?php

namespace Academico2\Model\Academico;

use Illuminate\Database\Eloquent\Model;

class Calificacion extends Model
{
	public $table = 'calificaciones';
	protected $primaryKey = 'id_calificacion';


	protected $fillable = [
		'id_calificacion', 'nota', 'id_proceso', 'id_funcionario'
	]; 
}
