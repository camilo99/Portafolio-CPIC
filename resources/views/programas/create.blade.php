@extends('layouts.app')
@section('title', 'Portafolio CPIC')

@section('content')
<a href=".">Regresar</a>
<div class="col-md-6 col-md-offset-3">
	<h1>Registrar un programa de formación</h1>
	<hr>
	<form action="{{ url('programas') }}" method="POST">
		{{ csrf_field() }}

		<div class="form-group{{ $errors->has('nombre_programa')?'has-error':''}}">
			<input type="text" name="nombre_programa" placeholder="Nombre programa" class="form-control">
			@if($errors->has('nombre_programa'))
			<span class="help-block">
				{{$errors->first('nombre_programa')}}
			</span>
			@endif
		</div>
		<div class="form-group{{ $errors->has('descripcion_programa')?'has-error':''}}">
			<input type="text" name="descripcion_programa"  placeholder="Descripción del programa" class="form-control">
			@if($errors->has('descripcion_programa'))
			<span class="help-block">
				{{$errors->first('descripcion_programa')}}
			</span>
			@endif
		</div>
		<div class="form-group{{ $errors->has('tipo_programa')?'has-error':''}}">
			<select name="tipo_programa"  class="form-control">
				<option value="">-- Seleccione --</option>
				<option value="Tecnologia">Tecnologia</option>
				<option value="Tecnico">Tecnico</option>
				<option value="Complementaria">Complementaria</option>
				<option value="Virtual">Virtual</option>
			</select>
			@if($errors->has('tipo_programa'))
			<span class="help-block">
				{{$errors->first('tipo_programa')}}
			</span>
			@endif
		</div>
		<div class="form-group{{ $errors->has('duracion')?'has-error':''}}">
			<input type="number" name="duracion" placeholder="Duracion en meses" class="form-control">
			@if($errors->has('duracion'))
			<span class="help-block">
				{{$errors->first('duracion')}}
			</span>
			@endif
		</div>
		<div class="form-group">
			<button value="submit">Registrar</button>
		</div>
	</form>
</div>

@endsection