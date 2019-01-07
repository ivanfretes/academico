<?php

namespace Academico2\Http\Controllers\API\Academico;

use Illuminate\Http\Request;
use Academico2\Http\Controllers\Controller;
use Academico2\Model\Academico\Materia;
use Academico2\Model\Academico\MateriaDetalle;

class MateriaDetalleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Inicializa el semestre, con los detalles de las materias, 
     * como pueden ser, sección, semestre o año
     */
    public function inicializarMateriaDetalle(){
        $materias = Materia::where('estado', 'A')->get();

        foreach ($materias as $materia) {
            MateriaDetalle::create([

            ]);
        }*/

    }


    /**
     * Verifica si ya se inicializo con anterioridad
     */
    protected function verificarSiyaSeInicializo(){
        return MateriaDetalle::first();
    }


    /**
     * Duplica información de un materia detalle
     */
    public function duplicarMateriasDePeriodoAnterior(){

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
