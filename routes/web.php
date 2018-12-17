<?php

Route::get('/', function () {
    //eturn view('alumno.alumno-list');
    echo "Not found";
});


Route::get('/', [
	'as' => 'dashboard',
	'uses' => 'Manage\Academico\DashboardController@index'
]);


Route::get('alumnos/search', [
	'as' => 'alumno.search',
	'uses' => 'Manage\Academico\AlumnoController@searchByCi'
]);




//Route::resource('asistencias', 'Manage\Academico\AsistenciaClaseController');
//Route::resource('calificaciones', 'Manage\Academico\CalificacionController');
//Route::resource('examenes', 'Manage\Academico\ExamenController');
Route::resource('alumnos', 'Manage\Academico\AlumnoController');
//Route::resource('funcionarios', 'Manage\Academico\FuncionarioController');
Route::resource('matriculaciones', 'Manage\Academico\MatriculacionController');
Route::resource('procesos', 'Manage\Academico\ProcesoController');
//Route::resource('carreras', 'Manage\Academico\CarreraController');
//Route::resource('permisos', 'Manage\Academico\TipoUsuarioController');
//Route::resource('solicitudes', 'Manage\Academico\SolicitudController');
//Route::resource('becas', 'Manage\Academico\BecaController');
//Route::resource('inscripciones', 'Manage\Academico\InscripcionController');
Route::resource('materias', 'Manage\Academico\MateriaController');



// Route::group(['prefix' => 'academico'], function () {
//     Route::get('students', 'AcademicoCtrl\StudentCtrl@index');
//     Route::get('students/add', 'AcademicoCtrl\StudentCtrl@create');
//     Route::get('students/store', 'AcademicoCtrl\StudentCtrl@store');
// });




//Route::get('/home', 'HomeController@index')->name('home');



//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');


use Illuminate\Http\Request;

