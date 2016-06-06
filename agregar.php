<?php
	include('bd.php');
	$consulta = "SELECT * FROM contacto";
	$query = mysql_query($consulta, $conectar);
?>
<!DOCTYPE html>
<html leng="en">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="estilo.css">
		<title>Contactos</title>
	</head>
	<body>
		<h1>Contactos</h1>
		<table>
			<tr>
				<th>Id</th>
				<th>Nombre</th>
				<th>Telefono</th>
				<th>Correo electronico</th>
				<th>Direccion</th>
			</tr>
			<?php while ($contacto = mysql_fetch_assoc($query)): ?>
				<tr>
					<td><?php echo $contacto["id"] ?></td>
					<td><?php echo $contacto["nombre"] ?></td>
					<td><?php echo $contacto["telefono"] ?></td>
					<td><?php echo $contacto["correo"] ?></td>
					<td><?php echo $contacto["direccion"] ?></td>
				</tr>
			<?php endwhile ?>
		</table>
	</body>
</html>