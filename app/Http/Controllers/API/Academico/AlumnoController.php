<?php

namespace Academico2\Http\Controllers\API\Academico;

use Illuminate\Http\Request;
use Academico2\Http\Controllers\Controller;
use Academico2\Model\Common\Persona;
use Academico2\Model\Academico\Alumno;
use Academico2\Http\Resources\Alumno\Alumno as AlumnoResource;
//use Academico2\Http\Resources\AlumnoCollection;
use Academico2\Http\Requests\AlumnoStore;
//use Academico2\Http\Resources\ErrorResponse;


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
        return AlumnoResource::collection(Alumno::paginate());
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
    public function store(AlumnoStore $request)
    {

        $persona = Persona::updateOrCreate([ 'ci' => $request->ci ],[
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'fecha_nacimiento' => $request->fecha_nacimiento,
            'lugar_nacimiento' => $request->lugar_nacimiento,
            'ci' => $request->ci,
            'nacionalidad' => $request->nacionalidad,
            'direccion_particular' => $request->direccion_particular,
            'direccion_laboral' => $request->direccion_laboral,
            'telefono_particular' => $request->telefono_particular,
            'telefono_laboral' => $request->telefono_laboral,
            'sexo' => $request->sexo
        ]);


        // Se relaciona persona a alumno
        $alumno_data = [
            'ci' => $persona->ci,
            'id_carrera' => $request->id_carrera
        ];

        $alumno = Alumno::create($alumno_data);

        return response(
            array(
                'status' => 'success', 
                'message' =>  "Se agrego un alumno",
                "data" => new AlumnoResource($alumno)
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

        if ($alumno == TRUE)
            return new AlumnoResource($alumno);
        else 
            return "Alumno no existe";
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
        $alumno->id_carrera = $request->id_carrera;
        $alumno->save();
        return $alumno;
    }

}
