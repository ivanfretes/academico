
 <h2>Listado de ALumnos</h2>
   
    <div style="margin:20px 0;"></div>
    
    <div id="toolbar">
		<a href="#" id="btn-alumno-new" class="easyui-linkbutton" iconCls="icon-add" plain="true" >Nuevo</a>
		<a href="#" id="btn-alumno-edit" class="easyui-linkbutton" iconCls="icon-edit" plain="true" >Editar</a>
		<a href="#" id="btn-alumno-rm" class="easyui-linkbutton" iconCls="icon-remove" plain="true" >Eliminar</a>
	</div>
   
    <table class="easyui-datagrid" id="alumno-datagrid" title="Alumnos" style="width:850px;height:250px">
            
        <thead>
            <tr>
                <th data-options="field:'id_alumno',width:100">ID</th>{{-- 
                <th data-options="field:'alumno_codigo',width:100">Código</th> --}}
                <th data-options="field:'alumno_ci',width:100">CI</th>
                <th data-options="field:'alumno_nombres',width:100">Nombres</th>
                <th data-options="field:'alumno_apellidos',width:100,align:'right'">Apellidos</th>
                {{-- <th data-options="field:'alumno_fecha_nacimiento',width:100,align:'right'">Fecha Nacimiento</th>
                <th data-options="field:'alumno_telefono',width:100,align:'right'">Teléfono</th>
                <th data-options="field:'alumno_direccion',width:100,align:'right'">Dirección</th> --}}
            </tr>
        </thead>
        <tbody>
			
			@foreach($alumnos as $alumno)
				<tr>
					<td>{{ $alumno->id_alumno }}</td>
					<td>{{ $alumno->alumno_ci }}</td>
					<td>{{ $alumno->alumno_nombres }}</td>
					<td>{{ $alumno->alumno_apellidos }}</td>
				</tr>	
			@endforeach
			
		</tbody>
    </table>
 	

    <script type="text/javascript">
        
		$(document).on('ready', function(){
			
			$('#btn-alumno-new').click(function(){
				$('#alumno-dlg').dialog('open').dialog('setTitle','Nuevo Usuario');
				$('#alumno-fm').form('clear');
				urlAction = urlAPI+'alumnos';
			})
			
			
			$('#btn-alumno-edit').click(function(){
				console.log('Edit User');
				let row = $('#alumno-datagrid').datagrid('getSelected');

				if (row){
					$('#alumno-dlg').dialog('open').dialog('setTitle','Editar Usuario');    
					$('#alumno-fm').form('load',row);
					urlAction = urlAPI+'alumnos/'+row.id_alumno;
				}
			});
			
			$('#btn-alumno-rm').click(function(){
				console.log('Destroy User');
			});
		});
		
    </script>