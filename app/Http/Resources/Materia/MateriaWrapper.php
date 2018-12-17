<?php

namespace Academico2\Http\Resources\Materia;

use Illuminate\Http\Resources\Json\Resource;
use Academico2\Http\Resources\Materia; 
use Academico2\Http\Resources\MateriaCorrelativa;


class MateriaWrapper extends Resource
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
            "attributes" => new Materia($this) , 
            "relationships" => [
                "materias_requisito" => MateriaCorrelativa::collection(
                    $this->materiasRequeridas
                ),
                "links" => [],
                "meta" => []
            ],
            "includes" => [

            ]
        ];
             
      
    }
}
