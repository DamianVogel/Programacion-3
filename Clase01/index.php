<html>
<head>
	<title></title>
</head>
<body>
<h1>Hola Mundo</h1>

<?php

$nombre = "Damian";

echo "<h2>Hola PHP soy $nombre</h2>";
echo "<h2>Hola PHP soy</h2>".$nombre;
echo "<h2>Hola PHP soy</h2>".'$nombre';






$veces = 10;
$contador = array(0,10,0);




for($i = 0; $i<$veces; $i++)	
	 {
	 	$prueba = $i + 1;
	 	$numero = rand(0,9);
	 	echo "<h2>Mi numero nro. $prueba random es $numero</h2>";
	 	
	 	switch($numero)
	 		{	
	 			case 0:
	 			
	 			$contador[0]++;
	 			break;

	 			case 1:
	 			
	 			$contador[1]++;
	 			break;

	 			case 2:
	 			
	 			$contador[2]++;
	 			break;

	 			case 3:
	 			
	 			$contador[3]++;
	 			break;

	 			case 4:
	 			
	 			$contador[4]++;
	 			
	 			break;

	 			case 5:
	 			
	 			$contador[5]++;
	 			
	 			break;

	 			case 6:
	 			
	 			$contador[6]++;
	 			
	 			break;

	 			case [7]:
	 				if((($contador[7]*100)/$veces)<5)
	 					{
	 					$contador[7]++;
	 					}
	 					else
	 						{
	 						$i--;
	 						continue;
	 						}	
	 			break;

	 			case 8:
	 			
	 			$contador[8]++;
	 			break;

	 			case 9:

	 			$contador[9]++;
	 			break;

	 			default:
	 			
	 			break;
	 		}						

	 }




echo "<h2>El numero 0 salio $contador[0]</h2>";
$porcentaje =  ($contador[0]*100)/$veces;
echo "<h2>El numero 0 tiene un porcentaje de</h2>".$porcentaje;

echo "<h2>El numero 1 salio $contador[1]</h2>";
$porcentaje =  ($contador[1]*100)/$veces;
echo "<h2>El numero 1 tiene un porcentaje de</h2>".$porcentaje;

echo "<h2>El numero 2 salio $contador[2]</h2>";
$porcentaje =  ($contador[2]*100)/$veces;
echo "<h2>El numero 2 tiene un porcentaje de</h2>".$porcentaje;

echo "<h2>El numero 3 salio $contador[3]</h2>";
$porcentaje =  ($contador[3]*100)/$veces;
echo "<h2>El numero 3 tiene un porcentaje de</h2>".$porcentaje;

echo "<h2>El numero 4 salio $contador[4]</h2>";
$porcentaje =  ($contador[4]*100)/$veces;
echo "<h2>El numero 4 tiene un porcentaje de</h2>".$porcentaje;

echo "<h2>El numero 5 salio $contador[5]</h2>";
$porcentaje =  ($contador[5]*100)/$veces;
echo "<h2>El numero 5 tiene un porcentaje de</h2>".$porcentaje;

echo "<h2>El numero 6 salio $contador[6]</h2>";
$porcentaje =  ($contador[6]*100)/$veces;
echo "<h2>El numero 6 tiene un porcentaje de</h2>".$porcentaje;

echo "<h2>El numero 7 salio $contador[7]</h2>";
$porcentaje =  ($contador[7]*100)/$veces;
echo "<h2>El numero 7 tiene un porcentaje de</h2>".$porcentaje;

echo "<h2>El numero 8 salio $contador[8]</h2>";
$porcentaje =  ($contador[8]*100)/$veces;
echo "<h2>El numero 8 tiene un porcentaje de</h2>".$porcentaje;

echo "<h2>El numero 9 salio $contador[9]</h2>";
$porcentaje =  ($contador[9]*100)/$veces;
echo "<h2>El numero 9 tiene un porcentaje de</h2>".$porcentaje;




echo "Los numeros en el array son: ".var_dump($contador);





?>


</body>
</html>