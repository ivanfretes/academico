<?php

namespace KuaaSys\Http\Controllers\Academico\API;

use Illuminate\Http\Request;
use KuaaSys\Http\Controllers\Controller;
use KuaaSys\Model\Academico\Alumno;
use KuaaSys\Http\Resources\AlumnoResource;
use KuaaSys\Http\Resources\AlumnoCollection;
use KuaaSys\Http\Requests\AlumnoStore;

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
        
        return new AlumnoCollection(Alumno::paginate());
    }



    /**
     * Retorna el Alumno Por cedula
     */
    public function ci($ci){
        $alumno = Alumno::where('alumno_ci', $ci)->first();
        return new AlumnoResource($alumno);
    }


    /**
     * Validaciones y creacuib del alumno
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AlumnoStore $request)
    {
        $alumno = new Alumno;

       	if ($alumno->create($request->all())){
       		return response(
                array(
                    'status' => 'success', 
                    'message' =>  "Se creo un nuevo alumno",
                    'last_insert_id' => $alumno
                ), 200
            );
       	}
    }

    /**
     * Visualizar datos del alumno
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $alumno = Alumno::find($id);
//        if (!is_null($alumno))
            return new AlumnoResource($alumno);
        return 'error';
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
