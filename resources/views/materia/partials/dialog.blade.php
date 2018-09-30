<!-- Formulario de Creacion -->
 	<div id="materia-dlg" class="easyui-dialog" style="width:400px;height:280px;padding:10px 20px;"
        closed="true" buttons="#dlg-buttons">
		<div class="ftitle"></div>
		<form id="materia-fm" method="post" novalidate>
			<div class="fitem">
				<label> Código Materia</label>
				<input name="codigo_materia" class="easyui-textbox" >
			</div>
			<div class="fitem">
				<label> Nombre</label>
				<input name="nombre" class="easyui-textbox" >
			</div>
			<div class="fitem">
				<label>Carrera:</label>
				<input name="id_carrera" class="easyui-textbox" >
			</div>
			<div class="fitem">
				<label>Créditos:</label>
				<input name="creditos" class="easyui-textbox" >
			</div>
			<div class="fitem">
				<label>Semestral:</label>
				<select id="cc" class="easyui-combobox" name="semestral" style="width:100px;">
				    <option>Si</option>
				    <option>No</option>
				</select>
			</div>
			<div class="fitem">
				<label>Nro. Semestre:</label>
				<input name="semestre_nro" class="easyui-textbox" >	
			</div>
			<div class="fitem">
				<label>Nro. Año:</label>
				<input name="anho_nro" class="easyui-textbox" >	
			</div>
			
			
		</form>
	</div>
	
	<!-- Dialog -->
	<div id="dlg-buttons">
		<a href="javascript:void(0)" class="easyui-linkbutton c6" iconCls="icon-ok" onclick="saveUser()" style="width:90px">Guardar</a>
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onclick="closeModal()" style="width:90px">Cancel</a>
	</div>
 	
 	<script>
		
		
		
		function saveUser(){
			$('#materia-fm').form('submit', {
				url : url,
				onSubmit :  function() {
					console.log('Validacion');
				},
				success: function(result){
					console.log('success');
					console.log(result);
					closeModal();
				}
			});
		}
		
		function closeModal(){
			$('#materia-dlg').dialog('close');
		}
	</script>