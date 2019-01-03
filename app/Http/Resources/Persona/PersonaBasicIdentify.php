<?php

namespace Academico2\Http\Resources\Persona;

use Illuminate\Http\Resources\Json\Resource;

class PersonaBasicIdentify extends Resource
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
            "type" => "personas",
            "id" => $this->ci,
        ];
    }
}
