<?php
	
	$usuario = "root";
	$server = "localhost";
	$clave = "";
	$bd = "contactos";

	$conectar = @mysql_connect($server, $usuario, $clave);

	if (@mysql_error()) {
		echo "Error conectando con la base de gatos";
	}

	if (!mysql_select_db($bd, $conectar)){
		echo "No se encontro la base de datos";
	}