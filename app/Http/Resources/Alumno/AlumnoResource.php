<?php

namespace Academico2\Http\Resources\Alumno;

use Illuminate\Http\Resources\Json\Resource;

class AlumnoResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
