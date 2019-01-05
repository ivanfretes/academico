<?php

namespace Academico2\Http\Resources\Materia;

use Illuminate\Http\Resources\Json\Resource;
use Academico2\Http\Resources\Materia; 

class MateriaCorrelativa extends Resource
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
            "type" => "correlativas",
            "id" => $this->id,
            /*//"id_correlativa" => $this->id,
            "flexible" => $this->flexible,
            //"id_materia" => $this->id_materia,
            "estado" => $this->estado,
            "id_materia_requisito" => $this->id_materia_requisito,
            //"materia" => new Materia($this),
            "created_at" => $this->created_at,
            "updated_at" => $this->updated_at*/
        ];
    }
}
