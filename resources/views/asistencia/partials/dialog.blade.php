<!-- Formulario de Creacion -->
 	<div id="asistencia-dlg" class="easyui-dialog" style="width:300px;height:280px;padding:10px 20px;"
        closed="true" buttons="#dlg-buttons">
		<div class="ftitle">User Information</div>
		<form id="asistencia-fm" method="post" novalidate>
			<div class="fitem">
				<label>Materia</label>
				<input name="id_materia" class="easyui-textbox" >
			</div>
			<div class="fitem">
				<label>Carrera:</label>
				<input name="id_carrera" class="easyui-textbox" >
			</div>
			<div class="fitem">
				<label>Fecha:</label>
				<input id="dd" name="asistencia_fecha"type="text" class="easyui-datebox">
			</div>
			<div class="fitem">
				<label>CI:</label>
				<input name="alumno_ci" class="easyui-textbox" >	
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
			$('#asistencia-fm').form('submit', {
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
			$('#asistencia-dlg').dialog('close');
		}
	</script>