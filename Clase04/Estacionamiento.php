<html>
		
		<?php 
		include("php/ClaseEstacionamiento.php");
		
		estacionamiento::CrearTabla(); 
		estacionamiento::TablaFacturacion();

		?>


<head>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link rel="stylesheet" type="text/css" href="animacion.css">


	<title></title>


</head>
		 
		

		<div class="CajaInicio animated bouncheInRight swing"> 
		
			<form action="Nexo.php" method="post" name="form" id="estacionamiento">
														
				<input type="text" 		name="patente"					placeholder="Patente">
				
				<button  class="MiBotonUTNMenu" name="Entrada"> Entrada </button>
				<button  class="MiBotonUTNMenu" name="Salida"> Salida  </button>
				
			</form>
		
		</div>
				
				<div class="animated bouncheInLeft swing" align="left"> <?php include("TablaDeEstacionados.php"); ?> </div>

				<div class="animated bouncheInRight swing" align="right"> <?php include("TablaDeFacturados.php"); ?> </div>
			



</body>
</html>

