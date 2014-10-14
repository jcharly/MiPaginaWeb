<?php 
 ?>
 
	<h3 class= "text-center">Registro</h3>
	<form action="validarRegistro.php" method="POST" id= "registro">
		<div class="row">
			<label for="nombre">Nombre:</label>
			<input type="text" id="nombre" name="nombre">
		</div>
		<div class="row">
			<label for="correo">Correo:</label>
			<input type="email" id="correo" name="correo">
		</div>
		<div class="row">
			<label for="pass">Contraseña:</label>
			<input type="password" id="pass" name="pass">
		</div>
		<div class="row">
			<p></p>
		</div>
		<button class= "btn btn-warning" type="submit">Registrar</button>
	</form>

 <?php 
  ?>