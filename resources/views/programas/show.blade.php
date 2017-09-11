@extends('layouts.app')
@section('title', 'Portafolio CPIC')

@section('content')
<div class="col-md-12">
	<a href=".">Regresar</a>
	<hr>
	@if(Auth::check())

<!-- 	<form action="{{ url('programas/search') }}" method="POST" class="form-line">
	<div class="form-group">
	{!! csrf_field() !!}	
	<input type="search" name="name" placeholder="Buscar - Nombre de artículo" class="form-control" autocomplete="off" id="name">
	<button type="submit" class="btn btn-info"><i class="glyphicon glyphicon-search"></i> Buscar</button>
	</div>
</form> -->
<br>



<div class="table-responsive">
	<table class="table table-bordered text-center">
		<tr>
			<th>Nombre Programa</th>
			<th>Descripción Programa</th>
			<th>Tipo Programa</th>
			<th>Duración en meses</th>

		</tr>
		<tr>
			<td>{{$pro->nombre_programa}}</td>
			<td>{{$pro->descripcion_programa}}</td>
			<td>{{$pro->tipo_programa}}</td>
			<td>{{$pro->duracion}}</td>

		</tr>
	</table>
</div>
</div>

@endif


@endsection