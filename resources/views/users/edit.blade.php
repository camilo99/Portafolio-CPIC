@extends('layouts.app')
@section('title', 'Portafolio CPIC')

@section('content')
<a href="/admin">Regresar</a>
<div class="col-md-6 col-md-offset-3">
	<h1>Editar usuario</h1>
	<hr>
	<form action="{{ url('users/'.$us->id) }}" method="POST" enctype="multipart/form-data">
	{{ csrf_field() }}
		<div class="form-group">
			<input type="text" name="name" value="{{$us->name}}" class="form-control">
		</div>
		<div class="form-group">
			<input type="email" name="email"  value="{{$us->email}}" class="form-control">
		</div>
		<div class="form-group">
			<input type="password" name="password"  value="{{$us->password}}" class="form-control">
		</div>
		<div class="form-group">
			<input type="file" class="form-control" name="image">
		</div>
		<div class="form-group">
			<select name="dependencia" id="" class="form-control">
                <option value="">Seleccione su rol</option>
                <option value="Administrador" {{$us->dependencia == 'Administrador' ? 'selected = "selected" ' : '' }}>Administrador</option>
                <option value="Empleado Bienestar" {{$us->dependencia == 'Empleado Bienestar' ? 'selected = "selected" ' : '' }}>Empleado Bienestar</option>
            </select>
		</div>
		<div class="form-group">
			<button value="submit">Registrar</button>
		</div>
	</form>
</div>

@endsection