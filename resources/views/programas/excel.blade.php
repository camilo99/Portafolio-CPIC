<table>
			
		<thead>
			<tr>	
				<th>Nombre del programa</th>
				<th>descripcion del programa</th>
				<th>tipo de programa</th>
				<th>duracion del programa</th>
			</tr>
		</thead>	

	
	<tbody>
	@foreach($programs as $pro)
		<tr>
			<td> {{ $pro->nombre_programa}} </td>
			<td> {{ $pro->descripcion_programa}} </td>
			<td> {{ $pro->tipo_programa}} </td>
			<td> {{ $pro->duracion}} </td>
		</tr>
	@endforeach
		
	</tbody>
</table>