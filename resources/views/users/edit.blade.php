@extends('layouts.app')
@section('title', 'Portafolio CPIC')

@section('content')
<a href="/admin">Regresar</a>
<div class="col-md-6 col-md-offset-3">
	<h1>Editar usuario</h1>
	<hr>
	<form action="{{ url('users/'.$user->id) }}" method="POST" enctype="multipart/form-data">
		{{ csrf_field() }}
		{{ method_field('PUT') }}

		<div class="form-group">
			<input type="text" name="name" value="{{$user->name}}" class="form-control">
		</div>
		<div class="form-group">
			<input type="email" name="email"  value="{{$user->email}}" class="form-control">
		</div>
		<div class="form-group">
			<input type="password" name="password"  value="{{$user->password}}" class="form-control">
		</div>
		<div class="form-group">
			<input type="file" class="form-control" name="image" >
		</div>
		<div class="form-group">
			<select name="dependencia" id="" class="form-control">
				<option value="">Seleccione su rol</option>
				<option value="Administrador" {{$user->dependencia == 'Administrador' ? 'selected = "selected" ' : '' }}>Administrador</option>
				<option value="SubDirector" {{$user->dependencia == 'SubDirector' ? 'selected = "selected" ' : '' }}>Sub Director</option>
				<option value="Bienestar" {{$user->dependencia == 'Bienestar' ? 'selected = "selected" ' : '' }}>Empleado Bienestar</option>
			</select>
		</div>
		<div class="form-group">
			<button value="submit">Editar</button>
		</div>
	</form>
</div>
<div class="container-fluid">
	<div class="row text-center">
		<form action="{{ url('users/'.$user->id) }}" method="POST" enctype="multipart/form-data">
			{{ csrf_field() }}
			{{ method_field('PUT') }}
			<div class="col-md-4" style="border-right: 2px solid black">
				<h2>Foto de perfil actual</h2>
				<img id="perfil" src="{{ asset(Auth::user()->image)}}" alt="" class="img-responsive">
				<input type="file" name="image" >{{$user->image}}

			</div>
			<div class="col-md-4" style="border-right: 2px solid black">
				<h2>Datos personales</h2>
				<div class="form-group">
					<input type="text" name="name" value="{{$user->name}}" class="form-control">
				</div>
				<div class="form-group">
					<input type="email" name="email"  value="{{$user->email}}" class="form-control">
				</div>

				<div class="form-group">
					<select name="dependencia" id="" class="form-control">
						<option value="">Seleccione su rol</option>
						<option value="Administrador" {{$user->dependencia == 'Administrador' ? 'selected = "selected" ' : '' }}>Administrador</option>
						<option value="SubDirector" {{$user->dependencia == 'SubDirector' ? 'selected = "selected" ' : '' }}>Sub Director</option>
						<option value="Bienestar" {{$user->dependencia == 'Bienestar' ? 'selected = "selected" ' : '' }}>Empleado Bienestar</option>
					</select>
				</div>
			</div>
			<div class="col-md-4" style="border-right: 2px solid black">
				<h2>Contraseña</h2>
				<div class="form-group">
					<input type="password" name="password"  value="{{$user->password}}" class="form-control">
				</div>
			</div>
		</div>
		<div class="form-group">
			<button value="submit">Editar</button>
		</div>
	</form>
</div>

@endsection