<?php
 include('bd.php');
 $consulta = "SELECT * FROM contacto";
 $query = mysql_query($consulta, $conectar);
 include('header.php');
?>
<div class="container-fluid">
<div class="col-xs-12 col-md-12">
<h1>Contactos</h1>
	<?php if (isset($_GET["saved"])): ?>
		<?php $saved = $_GET["saved"] ?>
		<?php if ($saved == 1): ?>
 			<div class="alert alert-success alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  <strong>Bien :) </strong>Datos guardados
			</div>
	 	<?php endif ?>
	<?php endif ?>
	<table class="table table-striped">
		<tr>
			<th>Id</th>
			<th>Nombre</th>
			<th>Telefono</th>
			<th>Correo electronico</th>
			<th>Direccion</th>
			<th class="center">Acciones</th>
		</tr>
		<?php while ($contacto = mysql_fetch_assoc($query)): ?>
			<tr>
				<td><?php echo $contacto["id"] ?></td>
				<td><?php echo $contacto["nombre"] ?></td>
				<td><?php echo $contacto["telefono"] ?></td>
				<td><?php echo $contacto["correo"] ?></td>
				<td><?php echo $contacto["direccion"] ?></td>
				<td class="center">
					<a href="editar.php?contacto=<?php echo $contacto["id"] ?>">
						<button class="btn btn-sm btn-warning"><i class="icon-pen" aria-hidden="true"></i></button>
					</a>
					<a href="borrar.php?contacto=<?php echo $contacto["id"] ?>">
						<button class="btn btn-sm btn-danger"><i class="icon-trash" aria-hidden="true"></i></button>
					</a>
				</td>
			</tr>
		<?php endwhile ?>
	</table>
</div>
</div>
</body>
</html>