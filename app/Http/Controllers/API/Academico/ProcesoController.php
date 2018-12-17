<?php

namespace Academico2\Http\Controllers\API\Academico;

use Illuminate\Http\Request;
use Academico2\Http\Controllers\Controller;
use Academico2\Model\Academico\ProcesoAlumno;

class ProcesoController extends Controller
{
    public function index(Request $request){
    	return ProcesoAlumno::all();
    }


    public function store(Request $request){
    	ProcesoAlumno::create($request->all());
    	return 'insertado';
    }
}
