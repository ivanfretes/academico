{{-- Formulario de Cracion / Edicion de una materia --}}

<div class="row">
	<div class="col-lg-12">
		<h2 class="title-page">Nueva Materia</h2>
	</div>

	<div class="col-lg-3">
		<label>Carrera</label>
		<select class="carrera-select form-control">
			@foreach($carreras as $carrera)
				<option value="{{$carrera->id_carrera}}">
					{{ $carrera->nombre }}
				</option>
			@endforeach	
		</select>
	</div>

	<div class="col-lg-6">
		<form action="{{ @url('api/v1/materias') }}" id="materia-form" 
			method="POST">
			<div class="row">
				<div class="col-lg-6">
					<label>Materia</label>
					<input type="text" name="m_nombre" class="form-control">
				</div>
				<div class="col-lg-6">
					<button class="btn btn-success">Guardar</button>
				</div>
			</div>
		</form>
	</div>

	<div class="col-lg-4">
	</div>
</div>



<script type="text/javascript">
	$(document).ready(function(){
		$('#materia-form').submit(function(e){
			console.log('Materia Enviada');
		});
	});
</script>


