
<form id="alumno-search-form" method="GET" >
	<div class="row">
		<div class="col-md-8">
			<label for="alumno-search-ci">Cédula de Identidad</label>
			<input type="text" name="ci" class="form-control"
				placeholder="Ingrese el número de cédula" id="alumno-search-ci">
		</div>

		<div class="col-md-4">
			<button class="btn btn-success btn-block btn-margin-label" 
					type="submit">
				Buscar
			</button>
		</div>
	</div>
	
	{{-- Carga los datos del alumnos, luego de la busqueda --}}
	<div class="row">
		<div class="col-lg-4">
			<h2 id="alumno-name-default"></h2>
		</div>
	</div>

</form>



<script type="text/javascript">
	$(document).ready(function(){

		// Limpia formulario de busqueda de alumnos
		$('#alumno-search-ci').keyup(function(){
			$('#alumno-name-default').html('');
		});
			

		// Busca un alumno, por CI
		$('#alumno-search-form').submit(function(ev){
			ev.preventDefault();

			let alumnoCi = $('#alumno-search-ci').val();
			let urlData = urlAPI+'alumnos/ci/'+alumnoCi;
			
			$.ajax({
				type: "GET",
				url: urlData,
				headers : {
					"content-type": "application/json",
					"accept": "application/json",
				},
				success: function(data){
					containerData.alumno = data;
					$('#alumno-name-default').html(data.alumno_apellidos+' '+data.alumno_nombres);
					// Actualizamos valores hidden
					$('input[name=id_alumno]').val(data.id_alumno);
				},
				error : function(response, textStatus, errorThrown){
					console.log(response);	
				}
			});	
		});


		// // Abre el dialogo y formulario de alumno
		// $('#btn-dlg-alumno').click(function(){
		// 	$('#alumno-dlg').dialog('open').dialog('setTitle','Nuevo Alumno');
		// 	$('#alumno-form').form('clear');
		// 	urlAction = urlAPI+'alumnos';
		// });
		
		// //
		

		// //Cierra el formulario de alumnos
		// $('#btn-alumno-dlg-close').click(function(){
		// 	$('#alumno-dlg').dialog('close');
		// });


		$('#btn-container').click(function(){
			console.log(containerData);
		});
	});

	
</script>