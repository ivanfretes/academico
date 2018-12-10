<?php

namespace Academico2\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class ErrorResponse extends Resource
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
            'status' => 'success', 
            'message' =>  "Se agrego un alumno",
            "data" => new AlumnoResource($alumno)
        ];
    }
}
