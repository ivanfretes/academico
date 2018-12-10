<?php

namespace Academico2\Http\Controllers\Manage\Academico;

use Illuminate\Http\Request;

use Academico2\Model\Academico\Inscripcion;
use Academico2\Model\Academico\Carrera;
use Academico2\Model\Academico\Alumno;
use Academico2\Model\Academico\Matriculacion;

class MatriculacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Formulacio de creacion de una matricula, 
     * contine los datos de la inscripcion
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {   
        $inscripcion = Inscripcion::where([
            'id_inscripcion' => $request->id_inscripcion
        ])->first();

        return view('matriculacion.matriculacion-detail', [
            'inscripcion' => $inscripcion,
            'alumno' => $inscripcion->alumno,
            'carrera' => $inscripcion->carrera
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
        $matriculacion = new Matriculacion;

        $matriculacion->observacion;
        $matriculacion->id_materia;
        $matriculacion->fecha_matriculacion;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
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
    public function edit($id)
    {
        //
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
