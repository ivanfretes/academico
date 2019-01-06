<?php

namespace Academico2\Http\Resources\Correlativa;

use Illuminate\Http\Resources\Json\Resource;

class CorrelativaAttributes extends Resource
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
            "id" => $this->id,
            "flexible" => $this->flexible,
            "id_materia" => $this->id_materia,
            "created_at" => $this->created_at,
            "updated_at" =>  $this->updated_at,
            "estado" => $this->estado,
            "id_materia_requisito" => $this->id_materia_requisito
        ];
    }
}
