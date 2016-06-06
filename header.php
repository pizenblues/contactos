<?php 
	$filepath = $_SERVER['PHP_SELF'];
	$filename = basename($filepath); 
 ?>
<!DOCTYPE html>
<html leng="en">
 <head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
		<script src="bower_components/jquery/dist/jquery.min.js"></script>
  	<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="lineicon/styles.css">
		<link rel="stylesheet" href="estilo.css">
		<title>Contactos</title>
	</head>
	<body>
	<nav class="navbar navbar-default">
  	<div class="container-fluid">
  		<div class="navbar-header">
    		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="#"><i class="icon-fire"></i> pipol</a>
	    </div>
    	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      	<ul class="nav navbar-nav">
	        <li <?php echo $filename == "lista.php" ? "class='active'" : '' ?>>
	        	<a href="lista.php">Lista de contactos<span class="sr-only">(current)</span></a>
	        </li>
	        <li <?php echo $filename == "nuevo.php" ? "class='active'" : '' ?>>
	        	<a href="nuevo.php">Agregar</a>
	        </li>
        </ul>
          <form class="navbar-form navbar-left" role="search" action="buscar.php" method="GET">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Buscar" name="buscar">
          </div>
          <button type="submit" class="btn btn-default"><i class="icon-search"></i></button>
        </form>
      </div>
    </div>
  </nav>