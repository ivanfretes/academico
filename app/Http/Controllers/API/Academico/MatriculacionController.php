<?php

namespace Academico2\Http\Controllers\API\Academico;

use Illuminate\Http\Request;
use Academico2\Http\Controllers\Controller;
use Academico2\Model\Academico\Matriculacion;
use Academico2\Model\Academico\Inscripcion;
use Academico2\Model\Academico\Alumno;
use Academico2\Http\Resources\Matriculacion\Matriculacion as MatriculacionResource;

class MatriculacionController extends Controller
{
    /**
     * No implementado
     */
    public function index()
    {
        return [
            "data" => Matriculacion::all()
        ];
    }



    /**
     * Materias a las que un alumno se matricula
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'materias' => 'required',
            'fecha_matriculacion' => 'required',
            'id_alumno' => 'required'
        ]);
        
        $materias = $request->materias;
        foreach ($materias as $materia) {
            
            try {

                Matriculacion::create([
                    "codigo" => $materia['codigo'],
                    "observacion" => $materia['observacion'],
                    "id_alumno" => $request->id_alumno,
                    "id_funcionario" => $materia['id_funcionario'],
                    "fecha_matriculacion" => $request->fecha_matriculacion,
                    "id_materia_detalle" => $materia['id_materia_detalle']
                ]);  

            } catch (Exception $e) {
                echo $e->getMessage();
            }

        }

        return [ 
            "message" => "Se agrego la matriculación correctamente" 
        ];
    }

    /**
     * Visualiza detalles de una matriculacion
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Matriculacion $matriculacion)
    {
        return [ "data" => $matriculacion ];
    }



    /**
     * Retorna el listado de matriculaciones por alumnos
     */
    public function getMatriculacionByAlumno(Alumno $alumno){
        return $alumno; 

        //return MatriculacionResource::collection();
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
     * Elimina una matriculacion
     * @param Matriculacion $matriculacion
     */
    public function destroy(Matriculacion $matriculacion)
    {
        if ($matriculacion->delete())
            return [
                "message" => "Se elimino la matriculación correctamente"
            ];

        return null;
    }


}
