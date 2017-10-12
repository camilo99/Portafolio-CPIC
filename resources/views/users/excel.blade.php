<table>
			
		<thead>
			<tr>	
				<th>Nombre</th>
				<th>email</th>
				<th>Rol en el sistema</th>
			</tr>
		</thead>	

	
	<tbody>
	@foreach($users as $us)
		<tr>
			<td> {{ $us->name}} </td>
			<td> {{ $us->email}} </td>
			<td> {{ $us->dependencia}} </td>
		</tr>
	@endforeach
		
	</tbody>
</table>