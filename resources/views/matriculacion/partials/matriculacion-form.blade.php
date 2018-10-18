<h1>Formulario de Matriculacion</h1>
<form id="matriculacion-form" method="post">
	<input name="id_alumno" type="hidden">
	
	
	<div class="row">
		<div class="col-lg-4">
			<label for="id_carrera">Carrera</label>
			<select name="id_carrera" class="form-control">
				@foreach($carreras as $carrera)
					<option value="{{ $carrera->carrera_id }}">
						{{ $carrera->nombre }}
					</option>
				@endforeach
			</select>			
		</div>
		
		<div class="col-lg-4">
			<label for="id_materias">Carrera</label>
			<select name="id_materias" class="form-control">
			</select>			
		</div>
		
		<div class="col-lg-12">
			<label for="observacion">Observación</label>
			<input type="text" name="observacion" class="form-control" > 
		</div>
	</div>

	
</form>


<script type="text/javascript">
	
</script>