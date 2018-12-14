@extends('template.main')

@section('content_page')
	
<form method="GET" >
	<div class="row">
		<div class="col-lg-12">
			<label for="ci">Cédula de Identidad</label>
			<input type="text" name="ci" id="ci" 
				value="{{ isset($alumno->ci) ? $alumno->ci : '' }}">
		</div>

	
	@if(count($inscripciones) > 0)
			
		<div class="col-lg-12">
			<label for="carrera"></label>
			<select name="carrera" id="carrera">
				@foreach($inscripciones as $inscripcion)
					<option value="{{ $inscripcion->carrera->id_carrera }}">
						{{ $inscripcion->carrera->nombre }}
					</option>
				@endforeach
			</select>
		</div>


		<div class="col-lg-12">

			{{-- Verifica si la carrera esta seleccionada  --}}
			@if(isset($carreraSelected) )
				{{ $carreraSelected->nombre }}
			@endif

		</div> 


		<div class="col-lg-12">
			@foreach($materias as $materia)
				<option value="{{ $materia->id_materia }}">
					{{ $materia->nombre }}
				</option>
			@endforeach
		</div> 
		
	@endif

		<button  class="btn btn-primary" type="submit" >Enviar</button>
	</div>
</form>
@endsection