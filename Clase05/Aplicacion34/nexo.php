<?php 
	//echo var_dump($_POST);
 
	$file = fopen("mis documentos/palabras.txt","a");

	if(isset($_POST))
	{
		$renglon = $_POST['palabras']."\n";
		fwrite($file,$renglon);
	
		fclose($file);
	}

	header("location:index.php");
 ?>

