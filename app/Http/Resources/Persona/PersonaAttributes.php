<?php

namespace Academico2\Http\Resources\Persona;

use Illuminate\Http\Resources\Json\Resource;

class PersonaAttributes extends Resource
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
                'nombre' => $this->nombre,
                'apellido' => $this->apellido,
                'fecha_nacimiento' => $this->fecha_nacimiento,
                'lugar_nacimiento' => $this->lugar_nacimiento,
                'ci' => $this->ci,
                'nacionalidad' => $this->nacionalidad,
                'direccion_particular' => $this->direccion_particular,
                'direccion_laboral' => $this->direccion_laboral,
                'telefono_particular' => $this->telefono_particular,
                'telefono_laboral' => $this->telefono_laboral,
                'sexo' => $this->sexo
        ];
    }
}
