<?php

namespace KuaaSys\Http\Controllers;

use Illuminate\Http\Request;
use KuaaSys\Model\Academico\Inscripcion;
use KuaaSys\Model\Academico\Carrera;
use Illuminate\Validation\ValidationException;

class InscripcionController extends Controller
{
    /**
     * Redirecciona al formulario de creacion
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect(route('inscripciones.create'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        return view('inscripcion.inscripcion-dashboard', [
            'carreras' => $carreras
        ]);
    }

    /**
     * Inscribe a un alumno a una carrera
     * 
     * redirecciona a una matriculacion
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'id_carrera' => 'required',
            'id_alumno' => 'required',
            'fecha_inscripcion' => 'required',
        ]); 

        /**
         * Verifica, si el alumno, ya se inscribio en la carrera
         */
        $oldInscripcion = Inscripcion::where([
            'id_carrera' => $request->id_carrera,
            'id_alumno' => $request->id_alumno,
        ])->first();

        if(FALSE == isset($oldInscripcion->id_inscripcion)){
            $inscripcion = new Inscripcion;
            $inscripcion->id_carrera = $request->id_carrera;
            $inscripcion->id_alumno = $request->id_alumno;
            $inscripcion->id_funcionario = NULL;
            $inscripcion->save(); 

            return redirect(
                route(
                    'matriculaciones.create', 
                    'id_inscripcion='.$inscripcion->id_inscripcion
                )
            );

        }

        $errors = ValidationException::withMessages([
            'error_1' => 'Alumno ya se encuentra inscripto en la carrera'
        ]);
        throw $errors;
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
        $inscripcion = Inscripcion::first($id);

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
