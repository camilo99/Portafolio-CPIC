@extends('layouts.app')

@section('title', 'Lista de Artículos')

@section('content')
<h1 class="text-center">Aliados</h1>

<a class="btn btn-success" href="{{url('aliados/create')}}">Añadir un aliado</a>
<hr>

@foreach($aliados as $ali)
<div class="col-md-3">
	<a href="{{ url('aliados/'.$ali->id.'/edit') }}" class="btn btn-default"  data-toggle="tooltip" title="Editar" style="position: relative;top: 36px;"><i class="fa fa-pencil-square-o"></i></a>
	<form action="{{ url('aliados/'.$ali->id) }}" method="POST" style="display: inline-block;">
		{{ method_field('delete') }}
		{!! csrf_field() !!}
		<button class="btn btn-delete" data-toggle="tooltip" title="Eliminar" style="left: 151px;  position: relative;top: 36px;"><i class="fa fa-times"></i></button>
	</form>
	<img class="img-responsive" style="height: 319px; width: 319px; border: 1px solid #0c6c6b;  " src="{{($ali->imagen)}}">
	<p>{{($ali->descripcion)}}</p>
	<p class="news-date"><a href="{{ url($ali->link)}}"> Más información</a> </p>

</div>

@endforeach

@endsection