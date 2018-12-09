<?php

namespace KuaaSys\Http\Controllers\API\Academico;

use Illuminate\Http\Request;
use KuaaSys\Http\Controllers\Controller;
use KuaaSys\Model\Common\Persona;
use KuaaSys\Model\Academico\Alumno;
use KuaaSys\Http\Resources\AlumnoResource;
use KuaaSys\Http\Resources\AlumnoCollection;
use KuaaSys\Http\Requests\PersonaStore;

class AlumnoController extends Controller
{

	public function __construct(){
		$this->middleware('cors');
	}


    /**
     * Listado de Alumnos / Paginacion
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
     * Validaciones y creacion del alumno
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PersonaStore $request)
    {

        $persona = Persona::firstOrCreate(['ci' => $request->ci]);

        // Se relaciona persona a alumno
        $alumno_data = [
            'ci' => $persona->ci
        ];


        $alumno = new Alumno;
        $alumno::create($alumno_data);

        return response(
            array(
                'status' => 'success', 
                'message' =>  "Se agrego un alumno",
                "data" => $alumno
            ), 200
        );
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
    public function update(AlumnoStore $request, Alumno $alumno)
    {
        $alumno = Alumno::find($id);

        $alumno->alumno_nombres = $request->alumno_nombres;
        $alumno->id_carrera = 2;

        
        $alumno->save();
        return $alumno;
    }

}
