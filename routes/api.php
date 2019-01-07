<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::namespace('API\Academico')->name('api.')->group(function()
{

	// -- Alumnos --
	Route::get('alumnos/ci/{ci}', 'AlumnoController@getInscripcionesByCI');
	Route::get(
		'alumnos/{alumno}/matriculaciones', 
		'MatriculacionController@getMatriculacionByAlumno'
	);


	// -- Materias --
	Route::get(
		'carreras/{carrera}/materias', 
		'MateriaController@getMateriasByCarrera'
	);
	
	// Materia detalle

	Route::post(
		'materias/detalles/inicializar', 
		'MateriaDetalleController@inicializarMateriaDetalle'
	)->name('materia-detalle.inicializar');

	Route::resource('materias/detalle', 'MateriaDetalleController', [
		'parameters' => [
	    	'matriculaciones' => 'matriculacion'
		],
		'names' => 'materia-detalle'
	]);


	// -- Matriculaciones --
	Route::resource('matriculaciones', 'MatriculacionController', [
		'parameters' => [
	    	'matriculaciones' => 'matriculacion'
		]
	]);


	Route::apiResources([
		'alumnos' => 'AlumnoController',
		'carreras' => 'CarreraController',
	    'examenes' => 'ExamenController',
	    'procesos' => 'ProcesoController',
	    'solicitudes' => 'ProcesoController',
	    'correlativas' => 'MateriaCorrelativaController',
		'materias' => 'MateriaController',		
	]);
    
});



/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/
