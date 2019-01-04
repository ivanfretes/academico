<?php

namespace Academico2\Http\Resources\Alumno;

use Illuminate\Http\Resources\Json\Resource;

class AlumnoResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "type" => "alumnos",
            "id" => $this->id_alumno,
            "attributes" => [
                'id_alumno' => $this->id_alumno,
                'ci' => $this->ci,
                'codigo' => $this->codigo,
                'fecha_inscripcion' => $this->fecha_inscripcion,
                'estado' => $this->estado,
                'id_carrera' => $this->id_carrera,
                'created_at' => $this->created_at,
                'updated_at' => $this->updated_at,
            ],
            "relationships" => new AlumnoRelationshipResource($this)
        ];
    }


     public function with($request)
    {
        //$carrera = $this->carrera;
        //$materiasPrerequeridas = $this->prerequisitos;

        // Objetos/recursos incluidos en el tag 'included', JSON API
        //$included = $materiasPrerequeridas->merge([$carrera]);

        return [
            'links'    => [
                'self' => route('api.alumnos.index'),
            ],
            'included' => [
                new PersonaAttributes($this->persona)
            ]
        ];
    }


    /*private function withIncluded($included)
    {

        return $included->map(
            function ($include) {
                if ($include instanceof Carrera) {
                    return new CarreraAttributesResource($include);
                }

                if ($include instanceof MateriaCorrelativa) {
                    return new CorrelativaAttributesResource($include);
                }
            }
        );
    }
*/  
}
