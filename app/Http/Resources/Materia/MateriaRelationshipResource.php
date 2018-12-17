<?php

namespace Academico2\Http\Resources\Materia;

use Illuminate\Http\Resources\Json\Resource;

class MateriaRelationshipResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            "materias_prerequisitos" => [
                "links" => [],
                "data" => CorrelativaResource::collection(
                    $this->prerequisitos
                )    
            ],
            "carreras" => [
                "links" => [],
                "data" => new CarreraResource($this->carrera)
            ]
        ];
    }

    public function with($request)
    {
        return [
            'links' => [
                'self' => "link de la relacion",
            ]
        ];
    }
}
