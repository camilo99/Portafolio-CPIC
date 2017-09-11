@extends('layouts.app')
@section('title', 'Portafolio CPIC')

@section('content')
<a href=".">Regresar</a>
<div class="col-md-6 col-md-offset-3">
	<h1>Registrar un usuario</h1>
	<hr>
	<form action="{{ url('users') }}" method="POST" enctype="multipart/form-data">
	{{ csrf_field() }}
		<div class="form-group">
			<input type="text" name="name" placeholder="Nombre completo" class="form-control">
		</div>
		<div class="form-group">
			<input type="email" name="email" placeholder="Correo electronico" class="form-control">
		</div>
		<div class="form-group">
			<input type="password" name="password" placeholder="Contraseña" class="form-control">
		</div>
		<div class="form-group">
			<input type="file" class="form-control" name="image">
		</div>
		<div class="form-group">
			<select name="dependencia" id="" class="form-control">
                <option value="">Seleccione su rol</option>
                <option value="Administrador">Administrador</option>
                <option value="Empleado Bienestar">Empleado Bienestar</option>
            </select>
		</div>
		<div class="form-group">
			<button value="submit">Registrar</button>
		</div>
	</form>
</div>

@endsection