<?php

namespace Academico2\Http\Resources\Matriculacion;

use Illuminate\Http\Resources\Json\Resource;

class Matriculacion extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {   

        return new MatriculacionAttributes($this);
    }
}
