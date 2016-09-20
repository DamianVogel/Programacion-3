<?php 

include "php/ClaseEstacionamiento.php";

$control = $_POST['patente'];
//var_dump($_POST);

if(isset($_POST['Entrada']))
	{
Estacionamiento::Guardar($control);
	}
if(isset($_POST['Salida']))	
	{
		Estacionamiento::Sacar($control);
		//var_dump($miListado);
	}







header("location:Estacionamiento.php");
?>