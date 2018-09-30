 <h2>Asistencia del Alumno</h2>
   
    <div style="margin:20px 0;"></div>
    
    <div id="toolbar">
		<a href="#" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="newUser()">Nuevo</a>
		<a href="#" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="editUser()">Editar</a>
		<a href="#" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="destroyUser()">Eliminar</a>
	</div>
   
    <table class="easyui-datagrid" id="asistencia-datagrid" title="Listado de Asistencias" style="width:850px;height:250px"
            data-options="singleSelect:true,collapsible:false,
            url:'{{ @url('/api/v1/asistencias') }}',method:'get', toolbar:'#toolbar'">
        <thead>
            <tr>
                <th data-options="field:'id_asistencia',width:100">ID</th>
                <th data-options="field:'id_materia',width:100,align:'right'">Materia</th>
                <th data-options="field:'id_carrera',width:100,align:'right'">Carrera</th>
                <th data-options="field:'alumno_ci',width:100">CI</th>
                <th data-options="field:'asistencia_fecha',width:100,align:'right'">Fecha</th>
                <th data-options="field:'asistencia_nombres',width:100,align:'right'">Nombres</th>
                <th data-options="field:'asistencia_apellidos',width:100,align:'right'">Apellidos</th>
            </tr>
        </thead>
    </table>
 	

    <script type="text/javascript">
        var url;
        
        function newUser(){
            console.log('new User');
            $('#asistencia-dlg').dialog('open').dialog('setTitle','Nueva Asistencia');
            $('#asistencia-fm').form('clear');
            url = 'http://localhost:8000/api/v1/asistencia';
        }
        
        
        function editUser(){
            console.log('Edit User');
            let row = $('#asistencia-datagrid').datagrid('getSelected');

            if (row){
                $('#asistencia-dlg').dialog('open').dialog('setTitle','Editar Asistencia');    
                $('#asistencia-fm').form('load',row);
                url = 'http://localhost:8000/api/v1/asistencia/'+row.id_asistencia;
            }
        }
        
        
        function destroyUser(){
            console.log('Destroy User');
        }
        
    </script>