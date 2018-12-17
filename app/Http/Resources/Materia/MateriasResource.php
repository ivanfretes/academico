<?php

namespace Academico2\Http\Resources\Materia;

use Illuminate\Http\Resources\Json\ResourceCollection;

class MateriasResource extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
