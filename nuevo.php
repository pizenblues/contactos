<?php
	include('bd.php');
	$error = false;
	if (isset($_POST["nombre"])){
		$nombre = $_POST["nombre"];
		$telefono = $_POST["telefono"];
		$direccion = $_POST["direccion"];
		$correo = $_POST["correo"];

		if($nombre || $telefono ){
			$consulta = "INSERT INTO contacto (nombre, telefono, direccion, correo)
			VALUES ('{$nombre}', '{$telefono}', '{$direccion}', '{$correo}')";
			$query = mysql_query($consulta, $conectar);
			header('location: lista.php?saved=1');
		}else{
			$error = true;
		}
	}
include('header.php');
?>
<div class="container-fluid">
<div class="col-xs-12 col-md-8">
<h1>Agregar contacto</h1>
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
	      <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
	    </div>
	  </div>

	  <div class="form-group">
	    <label for="telefono" class="col-sm-2 control-label"><i class="icon-phone"></i></label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="telefono" name="telefono" placeholder="telefono">
	    </div>
	  </div>

	  <div class="form-group">
	    <label for="correo" class="col-sm-2 control-label"><i class="icon-mail"></i></label>
	    <div class="col-sm-10">
	      <input type="email" class="form-control" id="correo" name="correo" placeholder="correo">
	    </div>
	  </div>

	  <div class="form-group">
	    <label for="direccion" class="col-sm-2 control-label"><i class="icon-location"></i></label>
	    <div class="col-sm-10">
	    	<textarea form="add" id="direccion" name="direccion" placeholder="direccion" class="form-control" rows="3"></textarea>
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