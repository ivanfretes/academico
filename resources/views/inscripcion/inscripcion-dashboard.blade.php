@extends('template.main')

@section('content_page')
	
	<div class="row">

	</div>
	<div class="row">
		
		<div class="col-lg-3">
		
		</div>
		<div class="col-lg-9">
			
			<div class="row">
				<div class="col-lg-12">
					@include('alumno.partials.alumno-searchbar')
				</div>
			</div>
			
			<hr>

			<div class="row">
				<div class="col-lg-12">
					@include('inscripcion.partials.inscripcion-form')
				</div>
			</div>

			{{-- @if (isset($viewContent) && !empty($viewContent) != '') 
				@include( $viewContent )
			@endif --}}
		</div>
	</div>


@endsection