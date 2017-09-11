@extends('layouts.app')

@section('title', 'Portafolio CPIC')

@section('content')

<div class="col-md-12">
	<hr>
	<ul class="breadcrumb">
		<li><a href="{{url('/')}}">Pagina Principal</a></li>
	</ul>
	<div class="form-group">
		<a class="btn btn-success" href="{{ url('empresas/create') }}">
			Añadir Empresa
		</a>
	</div>
	<div class="form-group">
		<div class="bus row">
			<div class="col-md-4">
				<input class="form-control" type="text" id="myInput" onkeyup="myFunction()" placeholder="Buscar">
				
			</div>
		</div>
		
	</div>
	
	<br>

	<div class="table-responsive">
		<table class="table table-bordered text-center"  id="myTable">
			<tr>
				<th>Titulo Empresa</th>
				<th>Descripción Empresa</th>
				<th>Foto Empresa</th>


				<th colspan="3">Acciones</th>

			</tr>
			@foreach($empresas as $em)
			<tr>
				<td>{{$em->titulo}}</td>
				<td>{{$em->descripcion}}</td>
				<td><img src="{{asset($em->foto)}}" width="100px"></td>
				<td><a href="{{ url('empresas/'.$em->id.'/edit') }}" class="btn btn-default"><i class="fa fa-pencil-square-o"></i></a></td>
				<td>
					<form action="{{ url('empresas/'.$em->id) }}" method="POST" style="display: inline-block;">
						{{ method_field('delete') }}
						{!! csrf_field() !!}
						<button class="btn btn-delete btn-default"><i class="fa fa-times"></i></button>
					</form>
				</td>
			</tr>
			@endforeach
		</table>
	</div>
</div>

@endsection
@push('scripts')
<script>

	function myFunction() {
      // Declare variables 
      var input, filter, table, tr, td, i;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      table = document.getElementById("myTable");
      tr = table.getElementsByTagName("tr");

      // Loop through all table rows, and hide those who don't match the search query
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
          if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        } 
      }
    }

   
</script>
@endpush