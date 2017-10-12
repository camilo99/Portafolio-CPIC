@extends('layouts.app')

@section('title', 'Lista de Artículos')

@section('content')
<h1 class="text-center">Noticias</h1>
<a class="btn btn-success" href="{{url('news/create')}}">Añadir noticia</a>
<hr>

@foreach($news as $new)
<div class="col-md-3">
	<form action="{{ url('news/'.$new->id) }}" method="POST" style="display: inline-block;">
		{{ method_field('delete') }}
		{!! csrf_field() !!}
		<button class="btn btn-delete" data-toggle="tooltip" title="Eliminar noticia"><i class="fa fa-times"></i></button>
	</form>
	<img class="img-responsive" style="height: 319px; width: 319px; border: 1px solid #0c6c6b;  " src="{{($new->imagen)}}">
	<p>{{($new->descripcion)}}</p>
	<p class="news-date"><i class="fa fa-calendar"></i> {{($new->fecha)}}</p>

</div>

@endforeach

@endsection