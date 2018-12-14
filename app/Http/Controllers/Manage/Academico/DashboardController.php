<?php

namespace Academico2\Http\Controllers\Manage\Academico;

use Illuminate\Http\Request;
use Academico2\Http\Controllers\Controller;


class DashboardController extends Controller
{

	/**
	 * Pagina principal, buscador, más grid de botones de todas las 
	 * opciones del sistema
	 */
    public function index(){
    	return view('dashboard.dashboard');
    }



}
