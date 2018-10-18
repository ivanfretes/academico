{{-- Asigna una sección, turno y horario a una materia  --}}

<h1>HORARIO MATERIA</h1>

<div id="hm-view-horario"></div>

<form action="{{ @url('api/v1/horario-materia') }}" 
	  id="horario-materia-form">
	
	<label id="hm-inicio"> Inicio:</label>
	<input type="text" name="hm-horario">

	<label id="hm-fin"> Fin : </label>
	<input type="text" name="hm-horario">
	
	<label id="hm-materia"> Materia : </label>
	<input type="text" name="hm-materia">

	<button class="btn btn-primary">Guardar</button>

	


</form>

<script type="text/javascript">
	$(document).ready(function(){

		// Envia el formulario de ma Materia
		$('#horario-materia-form').submit(function(e){
			e.preventDefault();
			console.log('enviamos las materias');
		})
	});
</script>