<?php

namespace Academico2\Http\Resources\Materia;

use Illuminate\Http\Resources\Json\Resource;

class CorrelativaAttributesResource extends Resource
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
            "type" => "materias_requeridas",
            "id" => strval($this->id),
            "attributes" => [
                "id" => $this->id,
                "flexible" => $this->flexible,
                "id_materia" => $this->id_materia,
                "created_at" => $this->created_at,
                "updated_at" => $this->updated_at,
                "estado" => $this->estado,
                "id_materia_requisito" => $this->id_materia_requisito
            ],
            "relationships" => [
                "links" => [],
                "data" => new MateriaAttributesResource($this->materia)
            ]
        ];
    }
}
