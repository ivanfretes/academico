<?php

namespace KuaaSys\Http\Controllers;

use Illuminate\Http\Request;

use KuaaSys\Model\Academico\Alumno;

class AlumnoController extends Controller
{
    /**
     * Visualiza pagina principal de alumnso
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   

        $alumnos = Alumno::orderBy('id_alumno', 'desc')->get();

        return view('alumno.alumno-dashboard', [
            'alumnos' => $alumnos,
            'alumnoView' => 'alumno.partials.alumno-searchbar'
        ]);
    }



    public function getAsistenciaByAlumno(Alumno $alumno){
        return 'listado de asistencia por alumno';
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alumno.alumno-dashboard', [
            'alumnoView' => 'alumno.partials.alumno-form'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Visualizamos el perfil academico del alumno
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Alumno $id)
    {

        return view('alumno.alumno-dashboard', [
            'alumnoView' => 'alumno.partials.alumno-form'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
