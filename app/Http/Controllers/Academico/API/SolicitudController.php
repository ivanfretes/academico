<?php

namespace KuaaSys\Http\Controllers\Academico\API;

use Illuminate\Http\Request;
use KuaaSys\Http\Controllers\Controller;
use KuaaSys\Model\Common\Solicitud;



class SolicitudController extends Controller
{
    public function index(){
    	return Solicitud::all();
    }

    public function store(Request $request){
    	Solicitud::create($request->all());
    	return 'insertado';
    }
}
