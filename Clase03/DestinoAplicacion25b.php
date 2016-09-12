<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link rel="stylesheet" type="text/css" href="animacion.css">

	<script>
		function Volver() {
	    
	window.history.back()		
	document.getElementById("form1").reset();				
		}
	


	</script>

	<title></title>
</head>
<body>
		<div class="CajaInicio animated bouncheInRight "> 

		
		<?php  
			$resultado=0;

			if(isset($_POST['base']) && isset($_POST['altura']))
				{
					$resultado = $_POST['base']*$_POST['altura']; 
				}
		?>		


		<form method="post" name="form1" id="DestinoSuperficie">
										

				<?php if(isset($_POST['base']) && isset($_POST['altura'])) {  ?>
							
				<input type="text"	name="resultado" value="<?php echo $resultado; ?>" readonly> 			
				
				<button onclick="Volver()" class="MiBotonUTNJuego"> Volver </button>



				<?php  } ?>

			
		</form>



</div>
</body>
</html>

