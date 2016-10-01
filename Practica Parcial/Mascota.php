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

		function ToString()
		{
			echo $this->_nombre." - ".$this->_edad." - ".$this->_fechaDeNac." - ".$this->_tipo." - ".$this->_sexo;
		}



}//fin de la clase


 ?>