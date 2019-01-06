<?php

/**
 * Permite asumir datos de correlatividad como si fuesen materias correlativas, es decir acceder a los datos de los prerequisitos
 */

namespace Academico2\Http\Resources\Correlativa;

use Illuminate\Http\Resources\Json\Resource;

class CorrelativaMateria extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return $this->materia;
    }
}
