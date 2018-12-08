@extends('template.main')

@section('content_page')
	
	<div class="row">
		Contenido de Prueba
	</div>

	{{-- <div class="row">
		<div class="row">
			
		</div>
	</div> --}}

	{{-- 
	<div class="row">
		
		<div class="col-lg-3">

			@include('template.nav-sidemenu', $navSideMenu = [
				'Nuevo Alumno' => @url('alumnos/create'),
				'Perfil Academico' => @route('alumnos.index'),
				'Filtro avanzado' => @url('alumnos/search'),
			])

		</div>
		<div class="col-lg-9">
			@if (isset($alumnoView) && !empty($alumnoView) != '') 
				@include( $alumnoView )
			@endif
		</div>
	</div>
	

	 --}}
@endsection
