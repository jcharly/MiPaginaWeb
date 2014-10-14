<?php 
	if(isset($_POST["nombre"])&& $_POST["nombre"]!=""){
		if(isset($_POST["correo"])&& $_POST["correo"]!=""){
			if($_POST["nombre"]=="user"){
				$nombre = $_POST["nombre"];
				$correro = $_POST["correro"];
				$contraseña = $_POST["pass"];

				header("Location: welcome.php");
			}
		}else{
			header("Location : error.php");
		}	
	}
	else{
		header("Location:error.php");
	}
 ?>