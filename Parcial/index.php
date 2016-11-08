<html>
<head>
	<title>Practica Parcial</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script  type="text/javascript" src="FuncionesParcial.js"></script>
<link rel="stylesheet" type="text/css" href="css/animations.css">
<link rel="stylesheet" type="text/css" href="css/estilo.css">




</head>
<body>
		<div class="CajaArriva">

			<form name="form" method="post" id="principal">

			<input type="text" name="nombre" id="nombre" placeholder="Nombre"><Br>
			<input type="text" name="edad" id="edad" placeholder="Edad"><Br>
			<input type="text" name="fecha de nacimiento" id="fechaDeNac" placeholder="Fecha de nacimiento"><Br>

			<input type="radio" name="sexo" id="sexo" 	value="Macho">Macho<Br>
			<input type="radio" name="sexo" id="sexo"   value="Hembra">Hembra<Br>

			<select name="tipo" id="tipo" class="CajaUno">
					<option value="Gato">Gato</option>
					<option value="Perro">Perro</option>	
			</select>
			<button type="button" onclick="GuardarMascota()">Aceptar</button>
			

			</form>

		</div>

		<div id="divprueba"></div>



</body>
</html>