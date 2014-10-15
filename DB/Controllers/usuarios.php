<?php 
	if(!isset($_SESSION)){
		session_start();
	}
 ?>

<?php 
	require_once './../Conexiones/conexion.php';

	$usuarios_query = "SELECT * FROM users";
	$usuarios_object = $conexion->query($usuarios_query);



 ?>



<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="./../css/bootstrap.css">
	<title>Usuarios</title>
</head>
<body>
<div class="row"><p></p></div>
<div class="container">
	<ul class="nav nav-pills nav-pills">
			<li class="active"><a href="./../index.php">Inicio</a></li>
		<li><a href="#">Usuarios</a></li>
	</ul>
</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-12 table-responsive">
				<table class="table table-striped">
					<thead>
						<td>Id</td>
						<td>Usuario</td>
						<td>Correo</td>
						<td>Password</td>
						<td>Borrar</td>
						<td>Cambiar</td>
					</thead>
					<tbody>
						<?php while($usuarios_row = mysqli_fetch_assoc($usuarios_object)){?>
						<tr>
							<td><?php echo $usuarios_row['id']; ?></td>
							<td><?php echo $usuarios_row['user']; ?></td>
							<td><?php echo $usuarios_row['mail']; ?></td>
							<td><?php echo $usuarios_row['pass']; ?></td>
							<td><a href="borrar.php?id=<?php echo $usuarios_row['id'];?>" class = "btn btn-info">Borrar</a></td>
							<td><a href="cambiar.php?id=<?php echo $usuarios_row['id'];?> " class= "btn btn-info">Cambiar</a></td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	

</body>
</html>