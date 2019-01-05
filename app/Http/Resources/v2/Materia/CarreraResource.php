<?php

namespace Academico2\Http\Resources\Materia;

use Illuminate\Http\Resources\Json\Resource;

class CarreraResource extends Resource
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
            "id_carrera": 2,
            "nombre": "Medicina",
            "nro_semestres": null,
            "nro_anhos": null,
            "con_tesis": null,
            "cant_horas": null,
            "observacion": null,
            "postgrado": null
        ]*/
        return [
            "type" => "carreras",
            "id" => strval($this->id_carrera)
        ];
    }
}
