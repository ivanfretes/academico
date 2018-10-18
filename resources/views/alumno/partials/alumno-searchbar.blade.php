<div class="row">
	<div class="col-md-7">
		<form id="alumno-search-form">
			<label for="alumno-search-ci">Cédula de Identidad</label>
			<input type="text" name="alumno_ci" class="form-control"
				placeholder="Ingrese el nro de CI" id="alumno-search-ci">
		</form>
	</div>
	<div class="col-md-2">
		<button class="btn btn-success btn-block btn-margin-label" 
				id="btn-search-alumno">
			Buscar
		</button>
	</div>
	<div class=" col-md-3">
		<button class="btn btn-primary btn-block btn-margin-label" 
				id="btn-dlg-alumno">
			¿Es un nuevo Alumno?
		</button>
	</div>
</div>
<div class="row div-hidden">
	<div class="col-md-7">
		<h3 id="alumno-name-default"></h3>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		// Limpia formulario de busqueda de alumnos
		$('#alumno-search-ci').keyup(function(){
			$('#alumno-name-default').html('');
		});
			

		// Busca CI de un alumno
		$('#btn-search-alumno').click(function(ev){
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
					console.log(data);
					$('#alumno-name-default').html(data.alumno_apellidos+' '+data.alumno_nombres);
				},
				error : function(response, textStatus, errorThrown){
					console.log(response);	
				}
			});	
		});


		// Abre el dialogo y formulario de alumno
		$('#btn-dlg-alumno').click(function(){
			$('#alumno-dlg').dialog('open').dialog('setTitle','Nuevo Alumno');
			$('#alumno-form').form('clear');
			urlAction = urlAPI+'alumnos';
		});
		
		//
		

		//Cierra el formulario de alumnos
		$('#btn-alumno-dlg-close').click(function(){
			$('#alumno-dlg').dialog('close');
		});
	});

	
</script>