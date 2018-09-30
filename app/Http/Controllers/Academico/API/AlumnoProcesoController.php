<?php

namespace KuaaSys\Http\Controllers\Academico\API;

use Illuminate\Http\Request;
use KuaaSys\Http\Controllers\Controller;
use KuaaSys\Model\Academico\ProcesoAlumno;

class AlumnoProcesoController extends Controller
{
    public function index(Request $request){
    	return ProcesoAlumno::all();
    }


    public function store(Request $request){
    	ProcesoAlumno::create($request->all());
    	return 'insertado';
    }
}
