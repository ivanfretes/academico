@extends('template.main-with-sidebar')

@section('sidebar_page')
	@include('template.nav-sidemenu', $navSideMenu = [
		'Nueva Materia' => @url('materias/create'),
		'Correlatividad' => @url('materias/correlatividad'),
		'Docentes' => @url('materias/docentes'),
		'Sección y Turno' => @url('materias/seccion-turno'),
	])
@endsection

@section('content_page')

	
	<hr>

	@include('materia.partials.materia-correlativa-form')
	<hr>

	@include('materia.partials.materia-seccion-turno-form')
	<hr>

	@include('materia.partials.materia-docente-form')

@endsection