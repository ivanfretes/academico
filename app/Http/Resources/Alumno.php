<?php

namespace KuaaSys\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Alumno extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $alumnoCarrera = $this->inscripcion;

        return [
            "id_alumno" => $this->id_alumno,
            "nombres" =>  $this->alumno_nombres,
          //  "carrera" => $alumnoCarrera
        ];

        //return parent::toArray($request);
    }
}
