<?php

namespace KuaaSys\Http\Controllers\Manage\Academico;

use Illuminate\Http\Request;
use KuaaSys\Http\Controllers\Controller;
use KuaaSys\Model\Academico\Alumno;

class AlumnoController extends Controller
{
    
    /**
     * Visualiza el dashboard de los Alumnos
     *  - Un Buscador
     *  - Y las opciones que se pueden concretar con un alumno
     */
    public function index()
    {   
        /*return view('alumno.partials.alumno-search',[
            'alumnoView' => 'alumno.partials.alumno-searchbar',
            'searchAction' => route('alumno.search')
        ]);*/

        return view('alumno.alumno-dashboard');
    }


    /**
     * Busca el perfil y todos los datos relacionados al alumno y lo
     * redirecciona al show de alumno / detalle
     * 
     * @param $ci - Cedula de identidad del alumno
     */
    public function searchByCI(Request $request){

        $request->validate([
            'ci' => 'required'
        ]);

        $alumno = Alumno::where('alumno_ci', $request->ci)->first();

        if (isset($alumno)){
            return redirect(route('alumnos.show',$alumno->id_alumno));    
        }

        return redirect(route('alumnos.create'));
    }


    public function getAsistenciaByAlumno(Alumno $alumno){
        return 'listado de asistencia por alumno';
    }




    /**
     * Formulario de inscripcion del alumno
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alumno.alumno-form', [
            'formAction' => url('api/v1/alumnos'),
            'alumnoView' => 'alumno.partials.alumno-form',
            'title_main_section' => 'Nuevo Alumno1'
        ]);
    }


    /**
     * Visualizamos el perfil del alumno
     */
    public function show(Alumno $alumno)
    {
    
        return view('alumno.alumno-dashboard',[
           'alumnoView' => 'alumno.partials.alumno-detail',
            'alumno' => $alumno,
            'title_main_section' => 'Perfil Academico'
        ]);

    }

    /**
     * Formulacio de edicacion de un alumno
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Alumno $alumno)
    {

        return view('alumno.alumno-dashboard',[
            'alumnoView' => 'alumno.partials.alumno-form',
            'alumno' => $alumno,
            'title_main_section' => 'Editar Alumno'
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*public function update(Request $request, Alumno $alumno)
    {
        Alumno::first($alumno->id)
            ->update();

        
    }*/


}
