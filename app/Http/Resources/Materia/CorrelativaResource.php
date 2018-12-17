<?php

namespace Academico2\Http\Resources\Materia;

use Illuminate\Http\Resources\Json\Resource;

class CorrelativaResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        /*return [
            "id" => $this->id,
            "flexible" => $this->flexible,
            "id_materia" => $this->id_materia,
            "created_at": null,
            "updated_at": null,
            "estado": "D",
            "id_materia_requisito": 22
        ];*/

        return [
            "type" => "materias_requeridas",
            "id" => strval($this->id)
        ];
    }
}
