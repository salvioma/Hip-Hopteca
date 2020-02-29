<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilo.css" />
	<meta charset="utf-8">
	<title>Login</title>
</head>

<body>

<div id="contenedor">

	<?php
		include ('cabecera.php');
		include ('sidebarIzq.php');
	?>

	<div id="contenido">
		<h1>Introduce tus datos de sesión</h1>
		<p>Debes rellenar el siguiente formulario correctamente para iniciar sesión</p>
		<form method="post" action="procesaform.php">
			Nombre:
			 <input type="text" name="name" />
			<br/>
			Contraseña:
			<input type="password" name="pass" />
			<br/>
			<input type="submit" value="Enviar">
		</form>	
		</div>
	<?php
		include ('sidebarDer.php');
		include ('pie.php');
	?>
	
</div> <!-- Fin del contenedor -->

</body>
</html>