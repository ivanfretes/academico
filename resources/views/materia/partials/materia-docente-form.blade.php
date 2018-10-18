{{-- Permite Asisnar un Docente a una materia --}}
<dir id="docente-materia-view"></dir>

<h1>Asignar Docente</h1>
<form action="{{ @url('api/v1/materias') }}" id="docente-materia-form" 
	 method="POST">
	<label>Docente</label>
	<input type="text" name="m_nombre">

	<button class="btn btn-success">Guardar</button>
</form>