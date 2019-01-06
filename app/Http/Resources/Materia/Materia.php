<?php

namespace Academico2\Http\Resources\Materia;

use Illuminate\Http\Resources\Json\Resource;
use Academico2\Http\Resources\Correlativa\CorrelativaMateria;
use Academico2\Http\Resources\Carrera\CarreraAttributes;

class Materia extends Resource
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
            "materia" => new MateriaAttributes($this),
            
            "correlativas" => CorrelativaMateria::collection(
                $this->prerequisitos
            ),

            "carrera" => new CarreraAttributes($this->carrera)
        ];
    }
}
