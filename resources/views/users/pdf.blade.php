<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lista De Articulos</title>
	<style>
		body{
			font-family: sans-serif; 
			color: #000;
		}
		table {
			width: 100%;
			border: thin solid #ccc;
			border-collapse: collapse;
		}
		table td, table th {
			font: 14px Arial;
			border: thin solid #ccc;
			color: #000;
			padding: 4px;
			text-align: center;
		}
		table th {
			background-color: #ddd;
			color: #666;
			text-align: center;
		}
	</style>
</head>	
<body>
	<h1> Lista </h1>
	<hr>
	<table>
			
		<thead>
			<tr>	
				<th>Nombre</th>
				<th>Email</th>
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

</body>
</html>
