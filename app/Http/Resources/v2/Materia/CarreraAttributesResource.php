<?php

namespace Academico2\Http\Resources\Materia;

use Illuminate\Http\Resources\Json\Resource;

class CarreraAttributesResource extends Resource
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
            "type" => "carreras",
            "id" => $this->id_carrera,
            "attributes" => [
                "id_carrera" => $this->id_carrera,
                "nombre" => $this->nombre,
                "nro_semestres" => $this->nro_semestres,
                "nro_anhos" => $this->nro_anhos,
                "con_tesis" => $this->con_tesis,
                "cant_horas" => $this->cant_horas,
                "observacion" => $this->observacion,
                "postgrado" => $this->postgrado,
            ]
        ];
    }
}
