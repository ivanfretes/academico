	<!-- Dialogo / Formulario -->
 	<div id="alumno-dlg" class="easyui-dialog dlg-hidden" 
 		style="width:800px;height:580px;padding:10px 20px;"
        closed="true" buttons="#dlg-buttons">
		
		<form id="alumno-fm" method="post" novalidate>
			{{-- <div class="fitem">
				<label>Carrera</label>
				<input name="carrera" class="easyui-textbox" >
			</div> --}}
			<div class="fitem">
				<label>Código Alumno:</label>
				<input name="alumno_codigo" class="easyui-textbox" >
			</div>
			<div class="fitem">
				<label>Nombres:</label>
				<input name="alumno_nombres" class="easyui-textbox" >
			</div>
			<div class="fitem">
				<label>Apellidos:</label>
				<input name="alumno_apellidos" class="easyui-textbox" >
			</div>
			<div class="fitem">
				<label>Doc. Identidad:</label>
				<input name="alumno_ci" class="easyui-textbox" >
			</div>
			<div class="fitem">
				<label>Nacionalidad:</label>
				<input name="alumno_nacionalidad" class="easyui-textbox" >
			</div>
			<div class="fitem">
				<label>Estado Civíl:</label>
				<select id="cc" class="easyui-combobox" name="alumno_estado_civil" style="width:100px;">
				    <option>Soltero/a</option>
				    <option>Casado/a</option>
				    <option>Divorciado/a</option>
				    <option>Viudo/a</option>
				</select>
			</div>
			<div class="fitem">
				<label>Género:</label>
				<select id="cc" class="easyui-combobox" name="alumno_sexo" style="width:100px;">
				    <option>Hombre</option>
				    <option>Mujer</option>
				</select>
			</div>
			<div class="fitem">
				<label>Fecha Nacimiento:</label>
				<input id="dd" name="alumno_fecha_nacimiento"type="text" class="easyui-datebox">
			</div>
			<div class="fitem">
				<label>Teléfono:</label>
				<input name="alumno_telefono" class="easyui-textbox" >
			</div>
			<div class="fitem">
				<label>Dirección:</label>
				<input name="alumno_direccion" class="easyui-textbox" >
			</div>
			<div class="fitem">
				<label>Email:</label>
				<input name="alumno_email" class="easyui-textbox" >
			</div>
			<div class="fitem">
				<label>Profesión:</label>
				<select id="cc" class="easyui-combobox" name="alumno_profesion_temp" >
				    <option>Estudiante</option>
				    <option>Licenciado/a</option>
				    <option>Ingeniero/a</option>
				</select>
			</div>
			<div class="fitem">
				<label>Lugar de Trabajo:</label>
				<input name="alumno_trabajo" class="easyui-textbox" >
			</div>
			<div class="fitem">
				<label>Teléfono Trabajo:</label>
				<input name="tel_trab_temp" class="easyui-textbox" >
			</div>
			<div class="fitem">
				<label>Cargo Ocupado:</label>
				<input name="cargo_temp" class="easyui-textbox" >
			</div>
			<div class="fitem">
				<label>Estado:</label>
				<input name="estado_temp" class="easyui-textbox" >
			</div>
			<div class="fitem">
				<label>Foto:</label>
				<input name="foto_temp" class="easyui-textbox" >
			</div>
			<div class="fitem">
				<label>Porcentaje Descuento:</label>
				<input name="pordesc_temp" class="easyui-textbox" >
			</div>
			<div class="fitem">
				<label>Monto del Descuento:</label>
				<input name="montodesc_temp" class="easyui-textbox" >
			</div>
			<div class="fitem">
				<label>Obs. del descuento:</label>
				<input name="observdesc_temp" class="easyui-textbox" >
			</div>


		</form>
	</div>
	
	<!-- Botones del Dialog -->
	<div id="dlg-buttons">
		<button class="easyui-linkbutton c6" iconCls="icon-ok" 
			id="btn-save-alumno" style="width:90px">Guardar</button>
		<button class="easyui-linkbutton" iconCls="icon-cancel" 
			id="btn-close-alumno-dlg"
			style="width:90px">Cancelar</button>
	</div>
 	
 	<script>
		
		$(document).ready(function(){
			$('#alumno-dlg').removeClass('dlg-hidden');
				
			// Crea / Edita un alumno
			$('#btn-save-alumno').click( function(){
				sendForm('#alumno-fm', urlAction);
			});
		
			
			$('#btn-close-alumno-dlg').click(function(){
				$('#alumno-dlg').dialog('close');
			});
			
		});
		
	</script>