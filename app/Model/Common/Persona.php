<?php

namespace Academico2\Model\Common;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
	protected $table = 'personas';
	public $primaryKey = 'ci';

	protected $guarded = array();
	
}
