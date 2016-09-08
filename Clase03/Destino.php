<?php
//el isset pregunta si get tiene algo o es null 
if(isset($_POST['nombre']))
{
	//para que se vea la variable se usa var_dump
	//var_dump($_GET);

	echo "<br>".$_POST['nombre'];
	//echo "<br>".$_GET['numerouno'];
}
else
{
	var_dump($_POST);
	echo "primer ingreso";
}
 ?>