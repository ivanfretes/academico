 <h2>Materias</h2>
   
    <div style="margin:20px 0;"></div>
    
    <div id="toolbar">
		<a href="#" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="newUser()">Nuevo</a>
		<a href="#" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="editUser()">Editar</a>
		<a href="#" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="destroyUser()">Eliminar</a>
	</div>
   
    <table class="easyui-datagrid" id="materia-datagrid" title="Listado de Materias" style="width:850px;height:250px"
            data-options="singleSelect:true,collapsible:false,
            url:'{{ @url('/api/v1/materia') }}',method:'get', toolbar:'#toolbar'">
        <thead>
            <tr>
                <th data-options="field:'id_materia',width:100">ID</th>
                <th data-options="field:'codigo_materia',width:100,align:'right'">Código Materia</th>
                <th data-options="field:'nombre',width:100">Materia</th>
                <th data-options="field:'id_carrera',width:100,align:'right'">Carrera</th>
                <th data-options="field:'creditos',width:100,align:'right'">Creditos</th>
                <th data-options="field:'semestral',width:120,align:'right'">Semestral o Anual</th>
                <th data-options="field:'anho_nro',width:120,align:'right'">Año o Semestre</th>
            </tr>
        </thead>
    </table>
 	

    <script type="text/javascript">
        var url;
        
        function newUser(){
            console.log('new User');
            $('#materia-dlg').dialog('open').dialog('setTitle','Nueva Materia');
            $('#materia-fm').form('clear');
            url = 'http://localhost:8000/api/v1/materia';
        }
        
        
        function editUser(){
            console.log('Edit User');
            let row = $('#materia-datagrid').datagrid('getSelected');

            if (row){
                $('#materia-dlg').dialog('open').dialog('setTitle','Editar Asistencia');    
                $('#materia-fm').form('load',row);
                url = 'http://localhost:8000/api/v1/materia/'+row.id_asistencia;
            }
        }
        
        
        function destroyUser(){
            console.log('Destroy User');
        }
        
    </script>