<!DOCTYPE html>
<html>
<body>
	<div id="cabecera">
		<h1>Mi gran página web</h1>
		<?php
		session_start();
		if ($_SESSION["login"] == true){
		echo "<div class="saludo">$_SESSION["nombre"]. <a href='logout.php'>Logout</a></div>";
		}
		else{
		<div class="saludo">Usuario desconocido. <a href='login.php'>Login</a></div>
		}
		?>
	</div>
</body>
</html>