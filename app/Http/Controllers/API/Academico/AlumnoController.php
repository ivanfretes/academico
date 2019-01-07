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
     * Retorna el inscripciones de una "Academico2\Model\Common\Persona" por 
     * ci, cada inscripcion representa un "Academico2\Model\Academico\Alumno"
     * de una carrera
     * 
     * @return 
     */
    public function getInscripcionesByCI($ci){
        return AlumnoResource::collection(
            Persona::where('ci', $ci)->first()->inscripciones
        );
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

        return response([
                'status' => 'success', 
                'message' =>  "Se agrego un alumno",
                "data" => new AlumnoResource($alumno)
            ], 200
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
            return [ "data" => new AlumnoResource($alumno) ];
        else 
            return [ "message" => "No se encontro alumno solicitado" ];
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


    /**
     * @since 2.0.1
     */
    public function destroy(Alumno $alumno)
    {
        if ($alumno->delete()){
            return ["message" => "Se elimino alumno correctamente"];
        }
        return null;
    }


}
