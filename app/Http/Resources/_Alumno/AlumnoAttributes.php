<?php

namespace Academico2\Http\Resources\Alumno;

use Illuminate\Http\Resources\Json\Resource;
use Academico2\Http\Resources\Persona\PersonaAttributes;


class AlumnoAttributes extends Resource
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
            'id_alumno'

        ];
    }
}
