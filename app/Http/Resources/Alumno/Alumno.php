<?php

namespace Academico2\Http\Resources\Alumno;

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
        return [
            'id_alumno' => $this->id_alumno,
            'ci' => $this->ci,
            'codigo' => $this->codigo,
            'fecha_inscripcion' => $this->fecha_inscripcion,
            'estado' => $this->estado,
            'id_carrera' => $this->id_carrera,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
