<?php
session_start();
$username = htmlspecialchars(trim(strip_tags($_REQUEST["name"])));
$password = htmlspecialchars(trim(strip_tags($_REQUEST["pass"])));

if ($username == user  && $password == userpass){
	$_SESSION["nombre"] = $user;
	$_SESSION["password"] = $pass;
	$_SESSION["login"] = true;
}
else if($username == admin  && $password == adminpass){
	$_SESSION["nombre"] = $user;
	$_SESSION["password"] = $pass;
	$_SESSION["login"] = true;
	$_SESSION["esAdmin"] = true;
}
?> 