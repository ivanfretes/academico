<?php

namespace KuaaSys\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class AlumnoCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        /*return [
            //'id_alumno' => $this->id_alumno,
            //'alumno_nombres' => $this->alumno_nombres,
            //'alumno_apellidos' => $this->alumno_apellidos,
            'alumno_ci' => $this->alumno_ci
        ];*/

        

        return [
            'alumnos' => $this->collection
        ];

        //return parent::toArray($request);
    }
}
