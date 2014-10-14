<?php 
	if(isset($_POST["nombre"])&& $_POST["nombre"]!=""){
		if($_POST["nombre"]=="ale"){
			$nombre = $_POST["nombre"];
			$contraseña = $_POST["contra"];

			header("Location: welcome.php");
		}
	}
	else{
		header("Location:error.php");
	}
 ?>