<?php

namespace Academico2\Http\Controllers\API\Academico;

use Illuminate\Http\Request;
use Academico2\Http\Controllers\Controller;
use Academico2\Model\Academico\Matriculacion;
use Academico2\Model\Academico\Inscripcion;
class MatriculacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ["data" => Matriculacion::all()];
    }


    /**
     * Matricula una materia a un alumno
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_materia' => 'required',
            'fecha_matriculacion' => 'required',
            'id_alumno' => 'required'
        ]);

        $matriculacion = Matriculacion::create($request->all());
        return [ "data" => $matriculacion ];
    }

    /**
     * Visualiza detalles de una matriculacion
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return [ "data" => $matriculacion ];
    }



    /**
     * Retorna el listado de matriculaciones por alumnos
     */
    public function getMatriculacionByAlumno(){

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
