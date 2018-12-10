<?php

namespace Academico2\Http\Controllers\API\Academico;


use Illuminate\Http\Request;
use Academico2\Http\Controllers\Controller;
use Academico2\Model\Academico\MateriaxSemestre;

class MateriaxSemestreController extends Controller
{
    /**
	 * Listado de las materias de una carrera
	 */
    public function index(Request $request){
    	return MateriaxSemestre::all();
    }

    /**
     * Asigna una materia a una carrera
     */
    public function store(Request $request){
    	$materiaSemestre = new MateriaxSemestre;
    	$materiaSemestre->create($request->all());

    	return 'insertado';
    }


    public function update(Request $request){
    	
    }
}
