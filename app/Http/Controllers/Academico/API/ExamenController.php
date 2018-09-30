<?php

namespace KuaaSys\Http\Controllers\Academico\API;

use Illuminate\Http\Request;
use KuaaSys\Http\Controllers\Controller;
use KuaaSys\Model\Academico\Examen;

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
