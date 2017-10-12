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

</body>
</html>
