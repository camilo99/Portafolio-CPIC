@extends('layouts.app')
@section('title', 'Portafolio CPIC')

@section('content')
<a href=".">Regresar</a>
<div class="col-md-6 col-md-offset-3">
	<h1>editar Empresa</h1>
	<hr>
	<form action="{{ url('empresas/'.$empresas->id) }}" method="POST" enctype="multipart/form-data">
	{{ csrf_field() }}
	{{method_field('PUT')}}

		<div class="form-group">
			<input type="text" name="titulo" class="form-control" value="{{ $empresas->titulo }}">
		</div>
		<div class="form-group">
			<input type="text" name="descripcion" class="form-control" value="{{ $empresas->descripcion }}">
		</div>
		<div class="form-group">
			<label>foto</label>
			<input type="file" name="foto" class="form-control">
		</div>

		<div class="form-group">
			<button class="btn btn-default" value="submit">editar</button>
		</div>
	</form>
</div>

@endsection