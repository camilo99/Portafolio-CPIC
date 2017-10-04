@extends('layouts.app')
@section('title', 'Portafolio CPIC')

@section('content')
<a href=".">Regresar</a>
<div class="col-md-6 col-md-offset-3">
	<h1>Añadir una noticia</h1>
	<hr>
	<form action="{{ url('news') }}" method="POST" enctype="multipart/form-data">
		{{ csrf_field() }}
		<div class="form-group">
			<input type="file" class="form-control" name="imagen">
		</div>
		<div class="form-group">
			<input type="text" name="descripcion" placeholder="Descripcion" class="form-control">
		</div>
		<div class="form-group">
			<input type="date" name="fecha" placeholder="Correo electronico" class="form-control">
		</div>

		<div class="form-group">
			<button value="submit">Registrar</button>
		</div>
	</form>
</div>

@endsection