<?php 
	$id= $_GET['id'];

 ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="./../css/bootstrap.css">
	<title>Document</title>
</head>
<body>
	<div class="row"><p></p></div>
	<div class="container">
		<ul class="nav nav-pills nav-pills">
  			<li class="active"><a href="./../index.php">Inicio</a></li>
			<li><a href="./usuarios.php">Usuarios</a></li>
		</ul>
	</div>
	
	<div class="container">
		<div class=" col-lg-offset-4 col-lg-4">
			<form role="form" action="./update.php" method="POST">
				<fieldset>
					<legend>Cambiar</legend>
				  <div class="form-group">
				    <label for="Usuario">Usuario:</label>
				    <input type="text" name="user" class="form-control" id="Ususario" placeholder="Usuario">
				  </div>
				  <div class="form-group">
				    <label for="Contraseña">Password:</label>
				    <input type="password" name="pass"class="form-control" id="Contraseña" placeholder="Password">
				  </div>
				  <div class="form-group">
				    <label for="Correo">Correo:</label>
				    <input type="email" name="mail" class="form-control" id="Correo" placeholder= "Correro">
				  </div>
				  <input type="hidden" name="id" value="<?php echo $id ?>">
				  <button type="submit" class="btn btn-default">Enviar</button>
				</fieldset>
			</form>
		</div>
	</div>
	
	
</body>
</html>

