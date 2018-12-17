<?php

namespace Academico2\Http\Controllers\Manage\Academico;

use Illuminate\Http\Request;

use Academico2\Http\Controllers\Controller;

use Academico2\Model\Academico\Carrera;
use Academico2\Model\Academico\Alumno;
use Academico2\Model\Academico\Matriculacion;

class MatriculacionController extends Controller
{
    /**
     * Listado de Materias con sus correspondients correlativas
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'contenido de prueba';
    }

    /**
     * Formulacio de creacion de una matricula, 
     * contine los datos de la inscripcion
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {   

        // Listado de inscripciones de una persona
        $inscripciones = Alumno::where(['ci' => $request->ci])->get();

        // Si existe inscripciones
        if (count($inscripciones) > 0){
            $alumno = $inscripciones[0];
        }
        else {
            $alumno = NULL;
        } 

        // Carrera Seleccionada
        $carreraIdSelected = $request->carrera;
        $carrera = Carrera::find($carreraIdSelected);


        // Se verifica que la carrera no sea nula, para listar las materias
        if (is_null($carrera)){
            $materias = NULL;
        }
        else {
            $materias = $carrera->materias;
        }

        // Listado de Procesos alumnos
        //$alumno->procesos;


        return view('matriculacion.matriculacion-form', [
            'inscripciones' => $inscripciones,
            'carreraSelected' => $carrera,
            'alumno' => $alumno,
            'materias' => $materias
           // 'procesos' => $alumno->procesos
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
