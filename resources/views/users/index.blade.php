@extends('layouts.app')
@section('title', 'Portafolio CPIC')

@section('content')

<br>
<h1 class="text-center">Usuarios registrados</h1>
<a class="btn btn-success" href="{{ url('users/create') }}">
	Añadir usuario
</a>
<hr>
@foreach($users as $us)
<div class="col-md-4">
	<div>

		<form action="{{ url('users/'.$us->id) }}" method="POST" style="display: inline-block;">
			{{ method_field('delete') }}
			{!! csrf_field() !!}
			<button class="btn btn-delete delete-user" data-toggle="tooltip" title="Eliminar usuario"><i class="fa fa-times"></i></button>
		</form>

		<img class="img-responsive" style="height: 319px; width: 319px; " src="{{ asset($us->image)}}">
		<p class="text-center"><strong>{{$us->name}}</strong></p>
		<p class="text-center">{{$us->dependencia}}</p>
	</div>
</div>
@endforeach
		<a class="btn btn-default"  href="{{ url('users/pdf')}}">
			<i class="glyphicon glyphicon-file"></i> Exportar PDF
		</a>
		<a class="btn btn-default" href="{{ url('users/showexcel')}}">
			<i class="glyphicon glyphicon-file"></i> Exportar EXCEL </a>




@endsection