@extends('layouts.app')

@section('title', 'Lista de Artículos')

@section('content')
	<form method="post" enctype="multipart/form-data" id="frm" class=" text-center">
		<div class="form-group">
			<input type="file" id="upload" class="hide" name="imagen" accept="image/*"  data-validation="required">
			<button class="btn btn-primary btn-upload" type="button">
				<i class="glyphicon glyphicon-picture"></i> Subir imagen
			</button>
			<button class="btn btn-success" type="submit">
				<i class="glyphicon glyphicon-ok"></i> Adicionar
			</button>
		</div>	
	</form>
@endsection