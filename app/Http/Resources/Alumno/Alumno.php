<?php

namespace Academico2\Http\Resources;

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
        $persona = $this->persona;

        return [ 
            "alumno" => parent::toArray($request)
        ];
    }
}
