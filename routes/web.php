<?php

Route::get('/', function () {
    //eturn view('alumno.alumno-list');
    echo "Not found";
});



Route::resource('asistencias', 'AlumnoAsistenciaController');
Route::resource('calificaciones', 'CalificacionController');
Route::resource('examenes', 'ExamenController');
Route::resource('alumnos', 'AlumnoController');
Route::resource('funcionarios', 'FuncionarioController');
Route::resource('matriculaciones', 'MatriculacionController');
Route::resource('procesos', 'AlumnoProcesoController');
Route::resource('carreras', 'CarreraController');
Route::resource('permisos', 'TipoUsuarioController');
Route::resource('solicitudes', 'SolicitudController');
Route::resource('becas', 'BecaController');
Route::resource('inscripciones', 'InscripcionController');
Route::resource('materias', 'MateriaController');



// Route::group(['prefix' => 'academico'], function () {
//     Route::get('students', 'AcademicoCtrl\StudentCtrl@index');
//     Route::get('students/add', 'AcademicoCtrl\StudentCtrl@create');
//     Route::get('students/store', 'AcademicoCtrl\StudentCtrl@store');
// });




//Route::get('/home', 'HomeController@index')->name('home');



//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');


use Illuminate\Http\Request;

//Route::middleware(['auth.admin'])->group(function () {

 //    Route::match(['get', 'post'], '/', function () {
	// 	return 'test' ;   	
	// })->name('dashboard');

	// Usuario administrador
	

	Route::get('test', function(Request $request) {
		//dd($request->user()::check());


		//dd(Auth::user()->role_id);
	    //return view('template.unauthorized');
	});

//});

