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

Route::resource('alumnos', 'Academico\API\AlumnoController');
Route::resource('carreras', 'Academico\API\CarreraController');
Route::resource('inscripciones', 'Academico\API\InscripcionController');

Route::resource('matriculaciones', 'Academico\API\MatriculacionController');
Route::resource('asistencia', 'Academico\API\AlumnoAsistenciaController');


// Materias
Route::resource('materias', 'Academico\API\MateriaController');
Route::resource('materias-x-carrera', 'Academico\API\MateriaxCarreraController');
Route::resource('materias-x-semestre', 'Academico\API\MateriaxSemestreController');

Route::resource('materias-x-matriculacion', 'Academico\API\MateriaxMatriculaController');


Route::resource('horario-materia', 'Academico\API\HorarioMateriaController');
Route::resource('asistencia-alumno', 'Academico\API\AsistenciaAlumnoController');


Route::resource('calificaciones', 'Academico\API\CalificacionController');
Route::resource('examenes', 'Academico\API\ExamenController');
Route::resource('proceso-alumno', 'Academico\API\AlumnoProcesoController');

Route::resource('solicitudes', 'Academico\API\AlumnoProcesoController');

/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/
