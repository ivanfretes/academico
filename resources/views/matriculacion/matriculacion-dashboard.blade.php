@extends('template.main')

@section('content_page')


{{-- Buscado de Alumno --}}
	@include('alumno.partials.alumno-searchbar')

	

<hr>


{{-- Formulario de matriculacion --}}
<div class="row">
	<div class="col-md-7">
		@include('matriculacion.partials.matriculacion-form')
	</div>
	<div class="col-md-3"></div>
</div>


{{-- Dialog de Alumnos --}}

<div>
    <div id="alumno-dlg" class="easyui-dialog" title="Nuevo Alumno" 
    	 data-options="iconCls:'icon-save', closed: true, buttons: '#alumno-dlg-button'" 
    	 style="width:750px;height:600px;padding:30px">

        @include('alumno.partials.alumno-form')
    </div>

    <!-- Botones del Dialog -->
	<div id="alumno-dlg-button">
        <button class="easyui-linkbutton c6" iconCls="icon-ok" 
			id="btn-alumno-save" style="width:90px"
			type="submit">Guardar</button>
		<button class="easyui-linkbutton" iconCls="icon-cancel" 
			id="btn-alumno-dlg-close"
			style="width:90px">Cancelar</button>
    </div>
</div>
	
<script>

$(document).ready(function(){

	// Envia una nueva matriculación
	$('#matriculacion-form').form({
		url:'',
		onSubmit: function(){
			// do some check
			// return false to prevent submit;
		},
		success:function(data){
			alert(data)
		}
	});
	
});


</script>

@endsection