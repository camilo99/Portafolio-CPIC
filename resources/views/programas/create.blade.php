@extends('layouts.app')
@section('title', 'Portafolio CPIC')

@section('content')
<a href=".">Regresar</a>
<div class="col-md-6 col-md-offset-3">
	<h1>Registrar un programa de formación</h1>
	<hr>
	<form action="{{ url('programas') }}" method="POST">
	{{ csrf_field() }}

		<div class="form-group">
			<input type="text" name="nombre_programa" placeholder="Nombre programa" class="form-control">
		</div>
		<div class="form-group">
			<input type="text" name="descripcion_programa"  placeholder="Descripción del programa" class="form-control">
		</div>
		<div class="form-group">
			<select name="tipo_programa"  class="form-control">
				<option value="">-- Seleccione --</option>
				<option value="Tecnologia">Tecnologia</option>
				<option value="Tecnico">Tecnico</option>
				<option value="Complementaria">Complementaria</option>
				<option value="Virtual">Virtual</option>
			</select>
		</div>
		<div class="form-group">
			<input type="number" name="duracion" placeholder="Duracion en meses" class="form-control">
		</div>
		<div class="form-group">
			<button value="submit">Registrar</button>
		</div>
	</form>
</div>

@endsection