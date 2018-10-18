{{-- Formulario para asignar correlativas / prerequisitos --}}

<form action="{{ @url('api/v1/correlativas') }}" id="mat-corr-form" method="POST">
	
	<h1>Asignar Correlatividad</h1>
	
	<label>Carrera</label>
	<select id="mc-carrera" name="mc_carrera">
		@foreach($carreras as $carrera)
			<option value="{{$carrera->id_carrera}}">
				{{ $carrera->nombre }}
			</option>
		@endforeach
	</select>

	<label>Materia</label>
	<select id="mc-materia-base" name="mc_materia_base[]"></select>

	<label>Materia Pre requisito</label>
	<select id="mc-materia-superior" name="mc_materia_superior"></select>
	
	<button type="submit" class="btn btn-success" id="btn-mc-save">Asignar Pre Requisito</button>
</form>


<script type="text/javascript">

	$(document).ready(function(){
		
		// Carga las materias de esa carrera
		$('#mc-carrera').change(function(){
			$('#mc-materia-base').html('');
			$('#mc-materia-superior').html('');
			
			let carreraId = $(this).val();
			let urlData = urlAPI + 'carreras/' + carreraId + '/materias';
			
			$.ajax({
				type: "GET",
				url: urlData,
				headers : {
					"content-type": "application/json",
					"accept": "application/json",
				},
				success: function(data){
					let materias = data;
					
					materias.forEach((element, index) => {
						$('#mc-materia-base').append(`<option value="${element.id_materia}">${element.estado}</option>`);
						$('#mc-materia-superior').append(`<option value="${element.id_materia}">${element.estado}</option>`);
					});
				},
				error : function(response, textStatus, errorThrown){
					console.log(response);	
				}
			});	
		});
		
		
		// Guarda una correlatividad
		$('#mat-corr-form').submit(function(e){
			console.log('Algo funciono');
		});

		//$('#mc-materia-superior').multiSelect();		
	});
</script>