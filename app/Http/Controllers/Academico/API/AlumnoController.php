<?php

namespace KuaaSys\Http\Controllers\Academico\API;

use Illuminate\Http\Request;
use KuaaSys\Http\Controllers\Controller;
use KuaaSys\Model\Academico\Alumno;
use KuaaSys\Http\Resources\Alumno as AlumnoResource;

class AlumnoController extends Controller
{

	public function __construct(){
		$this->middleware('cors');
	}


    /**
     * Listado de Alumnos
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Alumno::all();
        //return AlumnoResource::collection(Alumno::all());
    }


    /**
     * Validaciones y creacuib del alumno
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'alumno_ci' => 'required|max:11',
            'alumno_apellidos' => 'required|max:50',
            'alumno_nombres' => 'required|max:50' 
        ]);



       	if (Alumno::create($request->all())){
       		return 'success';
       	}
    }

    /**
     * Visualizar datos del alumno
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Alumno $alumno)
    {
        return new AlumnoResource($alumno);
    }


    /**
     * Valida y Graba la edición del alumno
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alumno $alumno)
    {
        $alumno->alumno_nombres = $request->alumno_nombres;
        $alumno->id_carrera = 2;

        
        $alumno->save();
        return $alumno;
    }

    /**
     * Eliminar alumno
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
