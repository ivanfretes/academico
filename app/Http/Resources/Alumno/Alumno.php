<?php

namespace Academico2\Http\Resources\Alumno;

use Illuminate\Http\Resources\Json\Resource;
use Academico2\Http\Resources\Persona\PersonaAttributes;
use Academico2\Http\Resources\Carrera\CarreraAttributes;

class Alumno extends Resource
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
            "alumno" => [
                "id_alumno" => $this->id_alumno,
                "ci" => $this->ci,
                "codigo" => $this->codigo,
                "fecha_inscripcion" => $this->fecha_inscripcion,
                "estado" => $this->estado,
                "id_carrera" => $this->id_carrera,
                "created_at" => $this->created_at,
                "updated_at" => $this->updated_at,
            ],
            "persona" => new PersonaAttributes($this->persona),

            "carrera" => new CarreraAttributes($this->carrera),
            //"matriculaciones" => $this->matriculaciones,

            "asistencia_examen" => [
                "links" => [],
                "data" => ""
            ],
            "asistencia_extension" => [
                "links" => [],
                "data" => ""
            ],
            "alumno_beca" => [ // Más adelante,llamar solicitud beca
                "links" => [],
                "data" => ""
            ],
            "proceso_alumno" => [
                "links" => [],
                "data" => ""
            ],
            "asistencia_clase" => [
                "links" => [],
                "data" => ""
            ],
            "pagos" => [
                "links" => [],
                "data" => ""
            ],
            "documentos_presentados" => [
                "links" => [],
                "data" => ""
            ]
        ];
    }
}
