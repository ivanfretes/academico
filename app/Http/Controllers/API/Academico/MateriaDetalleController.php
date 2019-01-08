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
     * Inicializa el semestre, con los detalles de todoas materias de una carrera 
     * como pueden ser, sección, semestre o año
     */
    public function materiaDetallePorCarrera(Request $request){

        $request::validate([
            "turno" => 'required',
            "seccion" => 'required',
            "anho_lectivo" => 'required',
            "id_carrera" => 'required|number'
        ]);


        // Listado de Materias Activas, de X Carrera
        $materias = Materia::where([
            'estado' => 'A',
            'id_carrera' => $request->carrera
        ])->get();

        if (count($materias) > 0){
            $elements = $this->elements($request);

            foreach ($materias as $materia) {
                //MateriaDetalle::create($elements);
                echo $materia->id_materia;
            }
        }


    }


    /**
     * Listado de propiedades a crearse o actualzarse en la tabla 
     * MateriaDetalle
     */
    protected function elements(Request $request, $id_materia){
        return [
            "cupo" => $request->cupo,
            "turno" => $request->turno,
            "observacion" => $request->observacion,
            "id_docente" => $request->id_docente,
            "seccion" => $request->seccion,
            "id_materia" => $id_materia,
            "precio_cuota" => $request->precio_cuota,
            "fecha_ini" => $request->fecha_ini,
            "fecha_fin" => $request->fecha_fin,
            "anho_lectivo" => $request->anho_lectivo,
            "estado" => $request->estado,
            "periodo_inicio" => $request->periodo_inicio
        ]);
    }


    /**
     * Verifica si ya se inicializo con anterioridad
     */
    protected function verificarSiyaSeInicializo(){
        
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
