

<?php  ?>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link rel="stylesheet" type="text/css" href="animacion.css">

	<script>
		function Volver() {
	    
	   window.history.back()		
		
		}
	


	</script>

	<title></title>
</head>
<body>
		<div class="CajaInicio animated bouncheInRight "> 



		<form method="post" name="form1" id="SuperficieDelRectangulo">
						<?php  if(!isset($_POST['resultado'])){?> 
						
							<input type="text" 		name="base"					placeholder="Ingrese la base"> 										
							<input type="text"		name="altura"				placeholder="Ingrese la altura"> 
							<input type="submit" 	class="MiBotonUTNJuego">
							<input type="reset" 	class="MiBotonUTNJuego">
					
						<?php } ?>

				<?php if(isset($_POST['base']) && isset($_POST['altura'])) {  ?>
							
				<input type="text"	name="resultado" value="<?php echo $_POST['base']*$_POST['altura']; ?>" readonly> 			
				
				<button onclick="Volver()" class="MiBotonUTNJuego"> Volver </button>



				<?php  } ?>

			
		</form>



</div>
</body>
</html>

