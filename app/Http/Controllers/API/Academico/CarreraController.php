<?php

namespace Academico2\Http\Controllers\API\Academico;

use Illuminate\Http\Request;
use Academico2\Http\Controllers\Controller;
use Academico2\Model\Academico\Carrera;
use Academico2\Http\Resources\Carrera as CarreraResource;


class CarreraController extends Controller
{

    /**
     * Listado de carreras
     */
    public function index()
    {
        return [ 
            "data" => Carrera::all()
        ];
    }

    /**
     * Crea una nueva carrera 
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'nombre' => 'required',
            'nro_anhos' => 'required',
            'nro_semestres' => 'required'
        ]);


        $carrera = Carrera::create($request->all());
        return [ "data" => $carrera];
    }

    /**
     * Detalle de una carrera
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Listado de materias por carrera
    }

    /**
     * Actualiza una nueva carrera
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
