<?php

namespace KuaaSys\Http\Controllers\Academico\API;

use Illuminate\Http\Request;
use KuaaSys\Http\Controllers\Controller;
use KuaaSys\Model\Academico\MateriaxCarrera;

class MateriaxCarreraController extends Controller
{

	/**
	 * Listado de las materias de una carrera
	 */
    public function index(Request $request){
    	return MateriaxCarrera::all();
    }


    /**
     * Asigna una materia a una carrera
     */
    public function store(Request $request){
    	$materiaCarrera = new MateriaxCarrera;
    	$materiaCarrera->create($request->all());

    	return 'insertado';
    }


    /*public function update(Request $request){
    	
    }*/
}
