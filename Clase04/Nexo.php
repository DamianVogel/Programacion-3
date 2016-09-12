<?php 

include "php/ClaseEstacionamiento.php";


var_dump($_POST);


//Estacionamiento::Guardar($_POST['patente']);


$miListado=Estacionamiento::Leer();

var_dump($miListado);



?>