@extends('layouts.app')
@section('title', 'Portafolio CPIC')

@section('content')
<a href="/programas">Regresar</a>
<div class="col-md-6 col-md-offset-3">
	<h1>Registrar un programa de formación</h1>
	<hr>

	<form action="{{ url('programas/'.$pro->id) }}" method="POST">
		{{ csrf_field() }}
		{{ method_field('PUT') }}

		<div class="form-group">
			<input type="text" name="nombre_programa" class="form-control"  value="{{ $pro->nombre_programa }}">
		</div>
		<div class="form-group">
			<textarea name="descripcion_programa" cols="30" rows="10"  class="form-control" >{{ $pro->descripcion_programa }}</textarea>

		</div>
		<div class="form-group">
			<select name="tipo_programa"  class="form-control">
				<option value="">-- Seleccione --</option>
				<option value="Tecnologia" {{ $pro->tipo_programa == 'Tecnologia' ? 'selected="selected"' : '' }}>Tecnologia</option>
				<option value="Tecnico" {{ $pro->tipo_programa == 'Tecnico' ? 'selected="selected"' : '' }}>Tecnico</option>
				<option value="Complementaria" {{ $pro->tipo_programa == 'Complementaria' ? 'selected="selected"' : '' }}>Complementaria</option>
				<option value="Virtual" {{ $pro->tipo_programa == 'Virtual' ? 'selected="selected"' : '' }}>Virtual</option>
			</select>
		</div>
		<div class="form-group">
			<input type="number" name="duracion" placeholder="Duracion en meses" class="form-control"  value="{{ $pro->duracion }}">
		</div>
		<div class="form-group">
			<button value="submit">Registrar</button>
		</div>
	</form>
</div>

@endsection