@extends('layouts.app')
@section('title', 'Portafolio CPIC')

@section('content')
<a href="/">Regresar</a>
<div class="col-md-6 col-md-offset-3">
	<h1>Editar Imagen</h1>
	<hr>

	<form action="{{ url('slider/'.$img->id) }}" method="POST" enctype="multipart/form-data">
		{{ csrf_field() }}
		{{ method_field('PUT') }}

		<div class="form-group">
			<input type="file" name="imagen" class="form-control">
		</div>

		<div class="form-group">
			<button value="submit">Editar</button>
		</div>
	</form>
</div>

@endsection