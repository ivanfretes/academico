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

Route::resource('asistencia-alumno', 'API\Academico\AsistenciaAlumnoController');

// Carreras
Route::resource('carreras', 'API\Academico\CarreraController');

// Inscripciones
Route::resource('inscripciones', 'API\Academico\InscripcionController');


// Matriculaciones 
Route::resource('matriculaciones', 'API\Academico\MatriculacionController');


// Asistencia
Route::resource('asistencia', 'API\Academico\AlumnoAsistenciaController');


// Materias
Route::resource('materias', 'API\Academico\MateriaController');

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

	Route::resource(
		'materias-x-semestre', 
		'API\Academico\MateriaxSemestreController'
	);

	// Genera y visualiza materias para la matriculacion, seria matriculacion detalle
	Route::resource('materias-x-matriculacion', 'API\Academico\MateriaxMatriculaController');


	// Asigna los horarios a una materia
	Route::resource('horario-materia', 'API\Academico\HorarioMateriaController');



Route::apiResources([
	'alumnos' => 'API\Academico\AlumnoController',
    'calificaciones' => 'API\Academico\CalificacionController',
    'examenes' => 'API\Academico\ExamenController',
    'procesos' => 'API\Academico\AlumnoProcesoController',
    'solicitudes' => 'API\Academico\ProcesoController'
]);

//Documentos


// Becas

/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/
