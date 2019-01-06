<?php

namespace Academico2\Http\Resources\Materia;

use Illuminate\Http\Resources\Json\Resource;

class MateriaAttributes extends Resource
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
            "id_materia" => $this->id_materia,
            "id_carrera" => $this->id_carrera,
            "codigo_materia" => $this->codigo_materia,
            "nombre" => $this->nombre,
            "creditos" => $this->creditos,
            "semestral" => $this->semestral,
            "semestre_nro" => $this->semestre_nro,
            "anho_lectivo" => $this->anho_lectivo,
            "descripcion" => $this->descripcion,
            "estado" => $this->estado,
            "created_at" => $this->created_at,
            "updated_at" => $this->updated_at,
        ];
    }
}
