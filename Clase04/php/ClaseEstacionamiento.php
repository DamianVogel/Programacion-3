
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
		$auto=explode("=>",$renglon);

		$listaDeAutos[]=$auto;	
	

	}

	fclose($archivo);

	return $listaDeAutos;
}

public static function Sacar ($patente)
{
	$listaDeAutos = Estacionamiento::Leer();
	$flag=0;
	
	foreach ($listaDeAutos as $auto) {
		if($patente == $auto[0])
			{
				$ahora=date("Y-m-d H:i:s");	
				$diferencia=strtotime($ahora)-strtotime($auto[1]);
				echo "Tiempo transcurrido . $diferencia";
				$flag=1;
			}		
	}

	if($flag==0)
	{
		echo "No se encuentra el auto";
	}


}




}




?>