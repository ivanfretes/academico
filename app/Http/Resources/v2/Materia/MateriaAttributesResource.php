<?php

namespace Academico2\Http\Resources\Materia;

use Illuminate\Http\Resources\Json\Resource;

class MateriaAttributesResource extends Resource
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
            //"id_materia" => $this->id_materia,
            //"carrera" => $this->carrera,
            "codigo_materia" => $this->codigo_materia,
            "creditos" => $this->creditos,
            "semestral" => $this->semestral,
            "semestre_nro" => $this->semestre_nro,
            "anho_lectivo" => $this->anho_lectivo,
            "descripcion" => $this->descripcion,
            "estado" => $this->estado,
            "nombre" => $this->nombre,
            "created_at" => $this->created_at,
            "updated_at" => $this->updated_at,
        ];
    }
}
