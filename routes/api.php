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

Route::get('alumnos/ci/{alumno}', 'Academico\API\AlumnoController@ci');
Route::resource('alumnos', 'Academico\API\AlumnoController');

Route::resource('asistencia-alumno', 'Academico\API\AsistenciaAlumnoController');

// Carreras
Route::resource('carreras', 'Academico\API\CarreraController');

// Inscripciones
Route::resource('inscripciones', 'Academico\API\InscripcionController');


// Matriculaciones 
Route::resource('matriculaciones', 'Academico\API\MatriculacionController');


// Asistencia
Route::resource('asistencia', 'Academico\API\AlumnoAsistenciaController');


// Materias
Route::resource('materias', 'Academico\API\MateriaController');

	// Visualiza las materias por identificador de carrera
	Route::get(
		'carreras/{id}/materias', 
		'Academico\API\MateriaxCarreraController@index'
	);

	// Asigna una materia a la carrera
	Route::post(
		'materias-x-semestre', 
		'Academico\API\MateriaxCarreraController@store'
	);


	// Visualiza datos asignados  a la materia por el semestre
	// Route::get(
	// 	'carreras/{id}/materias', 
	// 	'Academico\API\MateriaxCarreraController@index'
	// );

	Route::resource(
		'materias-x-semestre', 
		'Academico\API\MateriaxSemestreController'
	);

	// Genera y visualiza materias para la matriculacion, seria matriculacion detalle
	Route::resource('materias-x-matriculacion', 'Academico\API\MateriaxMatriculaController');


	// Asigna los horarios a una materia
	Route::resource('horario-materia', 'Academico\API\HorarioMateriaController');





// Calificaciones
Route::resource('calificaciones', 'Academico\API\CalificacionController');

// Examenes
Route::resource('examenes', 'Academico\API\ExamenController');


// Proceso
Route::resource('proceso-alumno', 'Academico\API\AlumnoProcesoController');


// Solicitudes
Route::resource('solicitudes', 'Academico\API\AlumnoProcesoController');


//Documentos


// Becas

/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/
