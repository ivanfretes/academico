<?php

namespace Academico2\Http\Controllers\API\Academico;

use Illuminate\Http\Request;
use Academico2\Http\Controllers\Controller;
use Academico2\Model\Academico\MateriaCorrelativa;
use Academico2\Model\Academico\Materia;
//use Academico2\Http\Resources\Materia as MateriaResource;
use Academico2\Http\Resources\Materia\MateriaWrapper as MateriaWrapperResource;

use Academico2\Http\Resources\MateriaCorrelativa as MateriaCorrelativaResource;

class MateriaCorrelativaController extends Controller
{
    /**
     * Listado de Materias, con sus respectivas correlativas
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return MateriaWrapperResource::collection(Materia::paginate());
    }


    /**
     * Se  asigna una materia como prerequisito, correlativa de otra
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:posts|max:255',
            'body' => 'required',
        ]);

        $correlativa = MateriaCorrelativa::create($request->all());
        return [
            "data" => $correlativa,
            "message" => "Se asigno correlativa correctamente"
        ];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*public function show(Materia $correlativa)
    {
        return new MateriaWrapperResource($correlativa);
    }*/

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
