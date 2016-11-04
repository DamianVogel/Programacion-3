<?php

//$contrasenia = $_POST['contrasenia'];

session_start();

$_SESSION['usuario'] = $_POST['usuario'];

setcookie("user",$_POST['usuario'],time()+(86400*30),"/");

//var_dump($_SESSION);

include("Sesion.php");


 ?>