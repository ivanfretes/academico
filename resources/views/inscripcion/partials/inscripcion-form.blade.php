<form action="{{ @route('inscripciones.store')}}" method="POST">
 	{{ csrf_field() }}

	<input type="hidden" name="id_alumno" value="">
	<div class="row">
		<div class="col-md-4">
			<label for="i-id_categoria">Carrera</label>
			<select class="form-control" 
				    id="i-id_carrera"
				    name="id_carrera">
					
					<option value="null">
						--
					</option>
				@foreach($carreras as $carrera)

					@if (isset($inscripcion->id_carrera) && 
						 $inscripcion->id_carrera == $carrera->id_carrera)
						<option value="{{ $carrera->id_carrera }}" checked>
							{{ $carrera->nombre }}
						</option>
					@else
						<option value="{{ $carrera->id_carrera }}">
							{{ $carrera->nombre }}
						</option>
					@endif

				@endforeach

			</select>
		</div>

		<div class="col-md-4">
			<label for="i-fecha_inscripcion">Fecha de Inscripción</label>
			<input type="text" id="i-fecha_inscripcion" name="fecha_inscripcion" 
				class="form-control" 
				value="{{ 
					isset($inscripcion->fecha_inscripcion) ? 
					$inscripcion->fecha_inscripcion :
					''
				}}">
		</div>
		
	</div>

	<div class="row">
		<div class="offset-md-9 col-md-3">
			<button class="btn btn-success btn-block btn-margin-label" 
					type="submit">
				Guardar
			</button>
		</div>
	</div>
</form>


<script type="text/javascript">
	
</script>