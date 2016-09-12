
<?php


 

 class Estacionamiento 
{ 

public static function Guardar ($patente)
{
	echo "esta guardado";
	$archivo = fopen("estacionados.txt", "a");

	

	$ahora=date("Y-m-d H:i:s");

	$renglon = $patente."=>".$ahora."\n";

	fwrite($archivo, $renglon);
	fclose($archivo);


}

public static function Leer ()
{

	$listaDeAutos= array();


	//La manera de agregar elementos.
	//$listaDeAutos[]=

	$archivo = fopen("estacionados.txt", "r");

	while(!FeoF($archivo))
	{
		$renglon=fgets($archivo);
		$listaDeAutos[]=$renglon;	
	}

	fclose($archivo);

	return $listaDeAutos;
}



}




?>