<?php 
	require_once './../Conexiones/conexion.php';	

	

	$update_query = "UPDATE users SET user='".$_POST['user']."',pass ='".md5($_POST['pass'])."',mail='".$_POST['mail']."' WHERE id = ".$_POST['id'];

	$conexion->query($update_query);


	header("Location: usuarios.php");



 ?>

 
