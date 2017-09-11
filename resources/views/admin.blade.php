@extends('layouts.app')
@section('title', 'Portafolio CPIC')

@section('content')

<h1 class="text-center">Dashboard</h1>
<hr>


<h1>Bienvenido {{ (Auth::user()->name)}}</h1>
<a href="{{ url('users/'.Auth::user()->id.'/edit') }}">Editar mi perfil</a>


@endsection