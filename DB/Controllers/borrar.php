<?php 
	require_once './../Conexiones/conexion.php';	

	$id= $_GET['id'];

	$borrar_query = "DELETE FROM users WHERE id = ".$id;

	$conexion->query($borrar_query);

	header("Location: usuarios.php");



 ?>