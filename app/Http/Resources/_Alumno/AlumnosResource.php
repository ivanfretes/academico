<?php

namespace Academico2\Http\Resources\Alumno;

use Illuminate\Http\Resources\Json\ResourceCollection;

class AlumnosResource extends ResourceCollection
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
            'alumnos' => $this->collection
        ];*/

        return parent::toArray($request);
    }
}
