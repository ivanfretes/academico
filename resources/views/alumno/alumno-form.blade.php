@extends('template.main')

@section('content_page')

<form action="{{ $formAction }}" method="post" id="alumno-form">
	@include('persona.partials.persona-form')
	

	<div class="">
	</div>

	<div class="row">
		<button class="btn btn-primary" type="submit">Guardar</button>
	</div>
</form>

<script type="text/javascript">
	$('document').ready(function(){
		$('#alumno-form').submit(function(e){
			e.preventDefault();
			if (confirm('Desea guardar el elemento'){
				console.log('se guardo una persona');
			}
			/*
			sendForm(
				'#alumno-form'
			);*/
		});
	})
</script>

@endsection