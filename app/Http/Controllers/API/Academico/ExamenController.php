<?php

namespace Academico2\Http\Controllers\API\Academico;

use Illuminate\Http\Request;
use Academico2\Http\Controllers\Controller;
use Academico2\Model\Academico\Examen;

class ExamenController extends Controller
{
    public function index(){
    	return Examen::all();
    }


    public function store(Request $request){
    	Examen::create($request->all());
    	return 'insertado';
    }


    public function update(){

    }
}
