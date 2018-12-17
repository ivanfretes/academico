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


/**
 * -- Alumnos
 */

Route::get('alumnos/ci/{alumno}', 'API\Academico\AlumnoController@ci');


// Personas
Route::resource('personas', 'API\Common\PersonaController');





// Asistencia
/*Route::resource(
	'asistencia', 
	'Academico2\Http\Controllers\Academico\API\AsistenciaClaseController'
);*/


// Materias

/*Route::get(
	'test', 
	'API\Academico\MateriaController@materiasConRequisitos'
);*/





//Route::resource('materias', 'API\Academico\MateriaController');


	// Visualiza las materias por identificador de carrera
	Route::get(
		'carreras/{id}/materias', 
		'API\Academico\MateriaxCarreraController@index'
	);

	// Asigna una materia a la carrera
	Route::post(
		'materias-x-semestre', 
		'API\Academico\MateriaxCarreraController@store'
	);


	// Visualiza datos asignados  a la materia por el semestre
	// Route::get(
	// 	'carreras/{id}/materias', 
	// 	'API\Academico\MateriaxCarreraController@index'
	// );

	/*Route::resource(
		'materias-x-semestre', 
		'API\Academico\MateriaxSemestreController'
	);*/

	// Genera y visualiza materias para la matriculacion, seria matriculacion detalle
	/*Route::resource('materias-x-matriculacion', 'API\Academico\MateriaxMatriculaController');*/


	// Asigna los horarios a una materia
	/*Route::resource('horario-materia', 'API\Academico\HorarioMateriaController');*/



Route::apiResources([
	'alumnos' => 'API\Academico\AlumnoController',
   // 'calificaciones' => 'API\Academico\CalificacionController',
    'examenes' => 'API\Academico\ExamenController',
    'procesos' => 'API\Academico\ProcesoController',
    'solicitudes' => 'API\Academico\ProcesoController',
    'correlativas' => 'API\Academico\MateriaCorrelativaController',
	'matriculaciones' => 'API\Academico\MatriculacionController',
	'materias' => 'API\Academico\MateriaController'
]);

//Documentos


// Becas

/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/
