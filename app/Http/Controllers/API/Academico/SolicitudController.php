<?php

namespace Academico2\Http\Controllers\API\Academico;

use Illuminate\Http\Request;
use Academico2\Http\Controllers\Controller;
use Academico2\Model\Common\Solicitud;



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
