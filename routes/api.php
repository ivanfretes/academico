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

	// -- Materias --
	Route::get(
		'carreras/{carrera}/materias', 
		'MateriaController@getMateriasByCarrera'
	);

	Route::apiResources([
		'alumnos' => 'AlumnoController',
	   // 'calificaciones' => 'API\Academico\CalificacionController',
	    'examenes' => 'ExamenController',
	    'procesos' => 'ProcesoController',
	    'solicitudes' => 'ProcesoController',
	    'correlativas' => 'MateriaCorrelativaController',
		'matriculaciones' => 'MatriculacionController',
		'materias' => 'MateriaController'
	]);
    

});



/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/
