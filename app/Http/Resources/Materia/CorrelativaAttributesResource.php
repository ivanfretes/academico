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
        $_collect = collect(parent::toArray($request));
        $attributes = $_collect->merge($this->materia);

        return [
            "type" => "materias_requeridas",
            "id" => strval($this->id),
            "attributes" => $attributes,
        ];
    }
}
