@extends('layouts.app')

@section('title', 'Lista de Artículos')

@section('content')
<h1 class="text-center">Imagenes</h1>

<a class="btn btn-success" href="{{url('imagenes/create')}}">Añadir imagen</a>
<hr>

@foreach($image as $img)
<div class="col-md-3">
	<form action="{{ url('imagenes/'.$img->id) }}" method="POST" style="display: inline-block;">
		{{ method_field('delete') }}
		{!! csrf_field() !!}
		<button class="btn btn-delete" data-toggle="tooltip" title="Eliminar imagen"><i class="fa fa-times"></i></button>
	</form>
	<img class="img-responsive" style="height: 319px; width: 319px; border: 1px solid #0c6c6b;  " src="{{($img->imagen)}}">
</div>
@endforeach

@endsection