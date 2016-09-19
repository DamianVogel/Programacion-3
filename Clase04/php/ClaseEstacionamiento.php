
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
		
		$listaDeAutosPresentes = array();
		

		foreach ($listaDeAutos as $auto) {
			if($patente == $auto[0])
				{
					$ahora=date("Y-m-d H:i:s");	
					$diferencia=strtotime($ahora)-strtotime($auto[1]);
					//echo "Tiempo transcurrido . $diferencia";
					
					$archivoFact = fopen("facturacion.txt", "a");

					$renglon = $auto[0]."=>".$diferencia*0.08;

					fwrite($archivoFact, $renglon);

					fclose($archivoFact);

					$flag=1;
				
				}		
				else
				{
					$listaDeAutosPresentes[]=$auto;

				}

								}//Termina el foreach

		if($flag==0)
		{
			echo "No se encuentra el auto";
		}
			Estacionamiento::GuardarLista($listaDeAutosPresentes);

	}

	public static function GuardarLista ($lista)
	{
		

		$archivo = fopen("estacionados.txt", "w");

		foreach ($lista as $auto) 
				{
					if($auto[0]!="")
						{
							$dato = $auto[0]."=>".$auto[1];
							fwrite($archivo, $dato);
							
						}	

				}		

		fclose($archivo);		


	}


	public static function CrearTabla ()
	{
		$listaDeAutos=Estacionamiento::Leer();
		
		$archivo=fopen("TablaDeEstacionados.php","w");

		$cabecera = "<table border=2> <th>Patente </th> <th> Ingreso<th/>";

		$cuerpo = "";

		foreach ($listaDeAutos as $auto ) 
			{
				if($auto[0]!="")
				{
				$cuerpo = $cuerpo."<tr><td>".$auto[0]."</td><td>".$auto[1]."</td></tr>";			
				}
			}

		$tablaEntera = $cabecera.$cuerpo."</table>";

		fwrite($archivo, $tablaEntera);

		fclose($archivo);

	}





}//Fin de la Clase




?>