@extends('layouts.app')
@section('title', 'Portafolio CPIC')

@section('content')
<a href=".">Regresar</a>
<div class="col-md-6 col-md-offset-3">
	<h1>Registrar Valor</h1>
	<hr>
	<form action="{{ url('bienestar') }}" method="POST" enctype="multipart/form-data">
	{{ csrf_field() }}

		<div class="form-group">
				<label>Icono</label>
				<input type="file" name="icono" class="form-control">
		</div>

		<div class="form-group{{ $errors->has('titulo') ? ' has-error' : ''}}">
			<input type="text" name="titulo" placeholder="Titulo" class="form-control">
			@if($errors->has('titulo'))
				<span class="help-block">
					{{$errors->first('titulo')}}
				</span>
			@endif	
		</div>
		<div class="form-group">
			<input type="text" name="descripcion"  placeholder="Descripción de la tarjeta" class="form-control">
		</div>
		

		<div class="form-group">
			<button class="btn btn-default" value="submit">Registrar</button>
		</div>
	</form>
</div>

@endsection