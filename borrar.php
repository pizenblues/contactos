<?php 
	include('bd.php');
	$contacto = $_GET['contacto'];
	$query = mysql_query("DELETE FROM contacto WHERE id = '{$contacto}'", $conectar);
	header("location: lista.php");
?>