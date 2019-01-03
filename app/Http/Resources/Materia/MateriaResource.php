<?php

namespace Academico2\Http\Resources\Materia;

use Illuminate\Http\Resources\Json\Resource;

use Academico2\Model\Academico\Materia;
use Academico2\Model\Academico\MateriaCorrelativa;
use Academico2\Model\Academico\Carrera;

class MateriaResource extends Resource
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
            "type" => "materias",
            "id" => strval($this->id_materia),
            "attributes" =>  new MateriaAttributesResource($this),
            "relationships" => new MateriaRelationshipResource($this),
            "links" => [
                'self' => route(
                    'api.materias.show', [
                    'materia' => $this->id_materia
                ])
            ],

        ];
    }


    public function with($request)
    {
        $carrera = $this->carrera;
        $materiasPrerequeridas = $this->prerequisitos;

        // Objetos/recursos incluidos en el tag 'included', JSON API
        $included = $materiasPrerequeridas->merge([$carrera]);

        return [
            'links'    => [
                'self' => route('materias.index'),
            ],
            'included' => $this->withIncluded($included)
        ];
    }


    private function withIncluded($included)
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

    
}
