@php
	$genero_sexo = ['M' => 'Masculino', 'F' => 'Femenino'];

@endphp

	<div class="row">
		<div class="col-lg-12">
			<h4>Datos Personales</h4>
		</div>
	</div>

	<div class="row">

		<div class="col-lg-6">

			<label for="nombre">Nombres: *</label>
			<input name="nombre" class="form-control" 
				value="{{ isset($persona->nombre) ? $persona->nombre : '' }}">
		</div>

		<div class="col-lg-6">
			<label for="apellido">Apellidos: *</label>
			<input name="apellido" class="form-control" 
				value="{{ isset($persona->apellido) ? $persona->apellido : '' }}">
		</div>

		<div class="col-lg-4">
			<label for="ci">Cédula: *</label>
			<input name="ci" class="form-control" 
				  value="{{ isset($persona->ci) ? $persona->ci : '' }}">
		</div>

		<div class="col-lg-4">
			<label>Fecha Nacimiento:</label>
			<input name="fecha_nacimiento"type="text" 
				class="easyui-datebox" style="height: 38px; width: 100%"
				value="{{ isset($persona->fecha_nacimiento) ? 
						  $persona->fecha_nacimiento : '' }}">
		</div>
	
		
		<div class="col-lg-4">
			<label for="lugar_nacimiento">Lugar de Nacimiento:</label>
			<input name="lugar_nacimiento" class="form-control" 
				value="{{ isset($persona->lugar_nacimiento) ? 
						  $persona->lugar_nacimiento : '' }}">
		</div>

		<div class="col-lg-4">
			<label for="nacionalidad">País de Nacionalidad:</label>
			<input name="nacionalidad" class="form-control" 
				value="{{ isset($persona->lugar_nacimiento) ? 
						  $persona->lugar_nacimiento : '' }}">
		</div>

		<div class="col-lg-4">
			<label>Género: </label>
			<select class="form-control" name="sexo" >
				<option value="-">Sin Especificar</option>
				
				@foreach($genero_sexo as $index => $value)
					@if(isset($persona->sexo) && $persona->sexo == $index)
						<option value="{{$index}}" checked> 
							{{$value}} 
						</option>
					@else 
						<option value="{{$index}}"> {{$value}} </option>
					@endif
				@endforeach

			</select>
		</div>

		<div class="col-lg-4">
			<label>Estado Civíl:</label>
			<select class="form-control" name="estado_civil">
			    <option value="-">Sin Especificar</option>
			    <option value="S">Soltero/a</option>
			    <option value="C">Casado/a</option>
			    <option value="D">Divorciado/a</option>
			    <option value="V">Viudo/a</option>
			</select>
		</div>

		<div class="col-lg-4">
			<label>Teléfono:</label>
			<input name="persona_telefono" class="form-control" >
		</div>
		<div class="col-lg-12">
			<label>Dirección:</label>
			<input name="direccion_particular" class="form-control" >
		</div>
		<div class="col-lg-4">
			<label>Email:</label>
			<input name="email" class="form-control" >
		</div>
	</div>
	
	<hr>

{{-- 	<div class="row">
		<div class="col-lg-12">
			<h5>Datos Laborales</h5>
		</div>
		
		<div class="col-lg-4">
			<label>Lugar de Trabajo:</label>
			<input name="persona_trabajo" class="form-control" >
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
			<input name="persona_trabajo" class="form-control" >
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
