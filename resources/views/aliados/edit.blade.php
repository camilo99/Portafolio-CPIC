@extends('layouts.app')
@section('title', 'Portafolio CPIC')

@section('content')
<a href="/aliados">Regresar</a>
<div class="col-md-6 col-md-offset-3">
	<h1>Añadir un aliado</h1>
	<hr>
	<form action="{{ url('aliados') }}" method="POST" enctype="multipart/form-data">
		{{ csrf_field() }}
		{{ method_field('PUT') }}

		<div class="form-group">
			<input type="file" class="form-control" name="imagen">
		</div>
		<div class="form-group">
			<input type="text" name="descripcion" placeholder="Descripcion" class="form-control"  value="{{ $aliados->descripcion }}">
		</div>
		<div class="form-group">
			<input type="text" name="link" placeholder="link" class="form-control"  value="{{ $aliados->link }}">
		</div>

		<div class="form-group">
			<button value="submit">Registrar</button>
		</div>
	</form>
</div>

@endsection