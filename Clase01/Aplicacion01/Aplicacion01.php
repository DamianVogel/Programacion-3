<?php

echo "Aplicacion Nº1"."<Br>";

$acumulador = 0;
$contador = 0;

$array = array();

for($i = 1; ($i-1)<=$acumulador,$acumulador < 1000;$i++)
{
	
	array_push($array,$i);
	$acumulador+=$i;
	$contador++;
	if($acumulador >= 1000)
	{
		$acumulador -=$i;
		$contador--;
		array_pop($array);
		break;
	}
}	

echo "Se sumaron los numeros: "."<Br>";

for($i=0; $i < count($array);$i++)
{
	echo $array[$i]." - ";


}

echo "<Br>";

echo "El acumulador tiene un valor de ".$acumulador."<Br>";
echo "Y se sumaron ".$contador."<Br>";

//var_dump($array);



echo "Ejercicio Nro.2"."<Br>";

$accion;

?>

