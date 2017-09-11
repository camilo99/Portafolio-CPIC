@extends('layouts.app')
@section('title', 'Portafolio CPIC')

@section('content')
<a href="/">Regresar</a>
<div class="col-md-6 col-md-offset-3">
	<h1>Agregar una Imagen</h1>
	<hr>
	<form action="{{ url('slider') }}" method="POST" enctype="multipart/form-data">
		{{ csrf_field() }}
		
		<div class="form-group">
			<input type="file" class="form-control" name="imagen">
		</div>
		
		<div class="form-group">
			<button value="submit">Agregar</button>
		</div>
	</form>
		

</div>

@endsection