<?php 

class Mascota {

	private $_nombre;
	private $_edad;
	private $_fechaDeNac;
	private $_tipo;
	private $_sexo;

		function __construct($nombre, $edad, $fechaDeNac, $tipo, $sexo)
		{
			$this->_nombre=$nombre;
			$this->_edad=$edad;
			$this->_fechaDeNac=$fechaDeNac;
			$this->_tipo=$tipo;
			$this->_sexo=$sexo;

		}

		function GuardarEnArchivo($mascota)
		{
			$archivo = fopen("MascotasIngresadas.php","a");

			fwrite($archivo, $mascota->ToString());
			fclose($archivo);

		}



		function ToString()
		{
			return $this->_nombre." - ".$this->_edad." - ".$this->_fechaDeNac." - ".$this->_tipo." - ".$this->_sexo."\r";
		}



}//fin de la clase


 ?>