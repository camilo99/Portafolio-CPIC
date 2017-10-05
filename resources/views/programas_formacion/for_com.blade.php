@extends('layouts.app')
@section('title', 'Portafolio CPIC')
@include('layouts.navbar')

@section('content')
<div class="col-md-12">
	<h1 class="text-center">Programas de formación</h1>

	@if(Auth::guest())

	<a href="/">Regresar</a>
	<hr>
	<div class="container">
		<div class="row">


			<div class="col-md-10 col-md-offset-1 panel-group" id="accordion" role="tablist" aria-multiselectable="true">
				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					<div class="panel panel-default">
						<div class="panel-heading text-center" role="tab" id="headingOne">
							<h4 class="panel-title" class="animated bounceInLeft" >
								<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									Formación complementaria
								</a>
							</h4>
						</div>
						@php
						$count=50;
						$cont=50;
						@endphp
						@foreach($programs as $pro)
						@if($pro->tipo_programa == 'Complementaria')
						<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingSOne">
							<div class="panel-body">
								<div class="panel-group" id="sub-accordion" role="tablist" aria-multiselectable="true">
									<div class="panel panel-default">
										<div class="panel-heading" role="tab" id="headingsOne">
											<h4 class="panel-title">
												<a role="button" data-toggle="collapse" data-parent="#sub-accordion" href="#collapses{{$count++}}" aria-expanded="true" id="button_co" aria-controls="collapsesOne">
													{{$pro->nombre_programa}} 
												</a>
											</h4>
										</div>
										<div id="collapses{{$cont++}}" class="panel-collapse collapse " role="tabpanel" aria-labelledby="headingsOne">
											<div class="panel-body" id="panel-body">
												{{$pro->descripcion_programa}}
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						@endif
						@endforeach	
					</div>
				</div>
			</div>

		</div>
	</div>


	@endif

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