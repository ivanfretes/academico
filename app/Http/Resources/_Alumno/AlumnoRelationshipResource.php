<?php

namespace Academico2\Http\Resources\Alumno;

use Illuminate\Http\Resources\Json\Resource;

use Academico2\Http\Resources\Persona\PersonaAttributes;

class AlumnoRelationshipResource extends Resource
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
            "personas" => [
                "links" => [],
                "data" => new PersonaBasicIdentify($this->persona)
            ],
            "carreras" => [
                "links" => [],
                "data" => ""
            ],
            "matriculaciones" => [
                "links" => [],
                "data" => ""
            ],
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
