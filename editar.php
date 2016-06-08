<?php 
	include('bd.php');
	$contacto = $_GET['contacto'];
	$data_query = mysql_query("SELECT * FROM contacto WHERE id = '{$contacto}'", $conectar);
	$data = mysql_fetch_assoc($data_query);
	$error = false;

	if (isset($_POST["nombre"])) {
		$nombre = $_POST["nombre"];
		$telefono = $_POST["telefono"];
		$direccion = $_POST["direccion"];
		$correo = $_POST["correo"];

		if(!$nombre || !$telefono ){
			$error = true;
		}else{
			$consulta = "UPDATE contacto SET nombre = '{$nombre}', telefono = '{$telefono}', 
			direccion = '{$direccion}', correo = '{$correo}' WHERE id = '{$contacto}'";
			$query = mysql_query($consulta, $conectar);
			header('location: lista.php?saved=1');
		}
	}
include('header.php');
?>
<div class="container-fluid">
<div class="col-xs-12 col-md-8">
<h1>Editar contacto</h1>
	<?php if ($error == true): ?>
		<div class="alert alert-danger alert-dismissible" role="alert">
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		  <strong>Hey! </strong>Debes ingresar el nombre y el numero de telefono
		</div>
	<?php endif ?>
	<form class="form-horizontal" id="add" method="POST">
	  <div class="form-group">
	    <label for="nombre" class="col-sm-2 control-label"><i class="icon-user"></i></label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value=<?php echo $data["nombre"]?> >
	    </div>
	  </div>

	  <div class="form-group">
	    <label for="telefono" class="col-sm-2 control-label"><i class="icon-phone"></i></label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="telefono" name="telefono" placeholder="telefono" value=<?php echo $data["telefono"]?> >
	    </div>
	  </div>

	  <div class="form-group">
	    <label for="correo" class="col-sm-2 control-label"><i class="icon-mail"></i></label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="correo" name="correo" placeholder="correo" value=<?php echo $data["correo"]?> >
	    </div>
	  </div>

	  <div class="form-group">
	    <label for="direccion" class="col-sm-2 control-label"><i class="icon-location"></i></label>
	    <div class="col-sm-10">
	    	<textarea form="add" id="direccion" name="direccion" class="form-control" rows="3"><?php echo $data["direccion"]?></textarea>
	    </div>
	  </div>

	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	      <button class="btn btn-info">Agregar</button>
	    </div>
	  </div>
	</form>
</div>
</div>
</body>
</html>