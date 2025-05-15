<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="registro.css">
	<title>registro de datos</title>
</head>
<body>
	<center>
	<form method="post" autocomplete="off">
		<h2>Bienvenido</h2>

		<div class="input-group">
			
		<div class="input-container">
			<input type="text" name="name" placeholder="Nombre">
			<i class="fa-solid fa-user"></i>
		</div><br>

		<div class="input-container">
			<input type="edad" name="edad" placeholder="Edad">
			<i class="fa-solid fa-user"></i>
		</div><br>

		<div class="input-container">
			<input type="email" name="email" placeholder="Correo">
			<i class="fa-solid fa-envelop"></i>
		</div><br>

		<div class="input-container">
			<input type="tel" name="phone" placeholder="Telefono">
			<i class="fa-solid fa-phone"></i>
		</div><br>

		<a href="#">Terminos y condiciones</a><br><br>
		<input type="submit" name="send" class="btn" value="Enviar">
		</div>
	</form>

	<?php
include("send.php");
	?>
</center>
</body>
</html>
