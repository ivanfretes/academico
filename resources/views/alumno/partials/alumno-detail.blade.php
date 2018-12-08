{{ $alumno->alumno_nombres }}

<br>
<a class="btn btn-success" href="{{ @route('alumnos.edit', $alumno->id_alumno) }}">Editar Datos</a>