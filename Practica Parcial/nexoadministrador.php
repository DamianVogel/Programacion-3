<?php 
		include("Mascota.php");

		

		
		
		$seleccion = $_POST['queHacer'];


		switch ($seleccion) {
			case 'GuardarMascota':
				$nuevaMascota = new Mascota($_POST['nombre'],$_POST['edad'],$_POST['fechaDeNac'],$_POST['sexo'],$_POST['tipo']);
				$nuevaMascota->GuardarEnArchivo($nuevaMascota);



				break;
			
			default:
				# code...
				break;
		}



		



		






 ?>