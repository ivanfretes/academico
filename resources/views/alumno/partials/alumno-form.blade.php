<form id="alumno-form" method="post" novalidate>
	<div class="row">
		<div class="col-lg-12">
			<h5>Datos Personales</h5>
		</div>
		<div class="col-lg-6">
			<label for="alumno_nombres">Nombres:</label>
			<input name="alumno_nombres" class="form-control" >
		</div>
		<div class="col-lg-6">
			<label for="alumno_apellidos">Apellidos:</label>
			<input name="alumno_apellidos" class="form-control" >
		</div>

		<div class="col-lg-4">
			<label for="alumno_ci">Cédula:</label>
			<input name="alumno_ci" class="form-control" >
		</div>

		<div class="col-lg-4">
			<label>Fecha Nacimiento:</label>
			<input name="alumno_fecha_nacimiento"type="text" 
				class="easyui-datebox" style="height: 38px; width: 100%">
		</div>

		<div class="col-lg-4">
			<label for="alumno_nombres">País de Nacionalidad:</label>
			<input name="alumno_nacionalidad" class="form-control" >
		</div>

		<div class="col-lg-4">
			<label>Género:</label>
			<select class="form-control" name="alumno_sexo" >
			    <option value="H">Hombre</option>
			    <option value="M">Mujer</option>
			</select>
		</div>

		<div class="col-lg-4">
			<label>Estado Civíl:</label>
			<select class="form-control" name="alumno_estado_civil">
			    <option value="S">Soltero/a</option>
			    <option value="C">Casado/a</option>
			    <option value="D">Divorciado/a</option>
			    <option value="V">Viudo/a</option>
			</select>
		</div>

		<div class="col-lg-4">
			<label>Teléfono:</label>
			<input name="alumno_telefono" class="form-control" >
		</div>
		<div class="col-lg-12">
			<label>Dirección:</label>
			<input name="alumno_direccion" class="form-control" >
		</div>
		<div class="col-lg-4">
			<label>Email:</label>
			<input name="alumno_email" class="form-control" >
		</div>
	</div>
	
	<hr>

{{-- 	<div class="row">
		<div class="col-lg-12">
			<h5>Datos Laborales</h5>
		</div>
		
		<div class="col-lg-4">
			<label>Lugar de Trabajo:</label>
			<input name="alumno_trabajo" class="form-control" >
		</div>

		<div class="col-lg-4">
			<label>Teléfono Trabajo:</label>
			<input name="tel_trab_temp" class="form-control" >
		</div>

		<div class="col-lg-4">
			<label>Cargo Ocupado:</label>
			<input name="cargo_temp" class="form-control" >
		</div>
	</div>
	

	<div class="row">
		<div class="col-lg-12">
			<h5>Configuración</h5>
		</div>
		
		<div class="col-lg-4">
			<label>Lugar de Trabajo:</label>
			<input name="alumno_trabajo" class="form-control" >
		</div>

		<div class="col-lg-4">
			<label>Teléfono Trabajo:</label>
			<input name="tel_trab_temp" class="form-control" >
		</div>

		<div class="col-lg-4">
			<label>Cargo Ocupado:</label>
			<input name="cargo_temp" class="form-control" >
		</div>
	</div>
	
	
	
	<div class="col-lg-4">
		<label>Estado:</label>
		<input name="estado_temp" class="form-control" >
	</div>
 --}}
 
 <button class="btn btn-success" type="submit">Guardar</button>
</form>	

<script type="text/javascript">
	$('document').ready(function(){
		$('#alumno-form').submit(function(e){
			e.preventDefault();
			sendForm(
				'#alumno-form', 
				urlAPI+'alumnos'
			);
			
		});
	})
	
</script>