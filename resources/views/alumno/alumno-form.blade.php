@extends('template.main')

@section('content_page')

<form action="{{ $formAction }}" method="post" id="alumno-form">
	@include('persona.partials.persona-form')


	<div class="row">
		<button class="btn btn-primary" type="submit">Guardar</button>
	</div>
</form>

<script type="text/javascript">
	$('document').ready(function(){
		$('#alumno-form').submit(function(e){
			e.preventDefault();
			console.log()
			sendForm(
				'#alumno-form'
			);
		});
	})
	
</script>

@endsection