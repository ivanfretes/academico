<?php

namespace Academico2\Http\Controllers\API\Academico;

use Illuminate\Http\Request;
use Academico2\Http\Controllers\Controller;
use Academico2\Model\Academico\MateriaxCarrera;

class MateriaxCarreraController extends Controller
{

	/**
	 * Listado de las materias de una carrera
	 */
    public function index($carreraId){
        return MateriaxCarrera::where('id_carrera',$carreraId)->get();
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
