<form id="matriculacion-form" method="post">
	
	<div>
		<label for="alumno_ci">Alumno</label>
		<input name="id_alumno" type="hidden">
	</div>


	<div>
		<label for="id_carrera"></label>
		<select name="id_carrera">
	{{-- 	@foreach($carreras as $carreras)
			<option value="{{ $carreras->carrera_id }}">
				{{ $carrera->nombre }}
			</option>
		@endforeach --}}
		</select>
	</div>
	
	<div>
		<label for="id_materia">Name:</label>
		<select class="id_materia" disabled></select>
	</div>
	
	


	<div>
		<label for="observacion"></label>
		<textarea name="observacion"></textarea>
		<input type="text" name="observacion">
</form>