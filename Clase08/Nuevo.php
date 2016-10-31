
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script  type="text/javascript" src="funciones.js"></script>



</head>
<body>

	<form enctype="multipart/form-data" method="post">
		
		<input type="text" id="usuario" value="<?php echo $_COOKIE['user'] ?>" >
		<input type="text" id="contrasenia">
		
		<button type="submit" name="submit" onclick="ingresar()">Ingresar </button>

	</form>








</body>
</html>