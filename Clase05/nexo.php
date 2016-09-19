<?php 

//$text = $_POST['text'];
//$file = $_POST['file'];

	
		
var_dump($_FILES);
		
	$destino = "foto/hola.jpg";

	if($_FILES['archivo']["type"]=="image/jpeg")
	{
		if(move_uploaded_file($_FILES["archivo"]["tmp_name"],$destino ))	
		{
			echo "ok";
		}
	}
?>