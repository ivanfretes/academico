@extends('template.main')

@section('content_page')
	
	<div class="row">
		<div class="col-lg-3">

			@include('template.nav-sidemenu', $navSideMenu = [
				'Principal' => @url('alumnos'),
				'Nuevo Alumno' => @url('alumnos/create'),
				'Perfil Academico' => @url('alumnos/profile'),
			])

		</div>
		<div class="col-lg-9">
			@if (isset($alumnoView) && !empty($alumnoView) != '') 
				@include( $alumnoView )
			@endif
		</div>
	</div>

@endsection
