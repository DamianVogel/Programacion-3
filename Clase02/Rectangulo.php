<?php

require_once 'Ejercicio POO.php';

class Rectangulo extends FiguraGeometrica
{	
	
	private $_ladoUno;
	private $_ladoDos;


	function __construct($ladoUno, $ladoDos )
	{
		parent::__construct();
		$this->_ladoUno=$ladoUno;		
		$this->_ladoDos=$ladoDos;
		$this->CalcularDatos();

	}

function CalcularDatos()
{
	$this->_perimetro = ($this->_ladoUno*2)+($this->_ladoDos*2);

	$this->_superficie= $this->_ladoUno*$this->_ladoDos;
	
}

function Dibujar()
{
	return "<Br>El rectango es de color $this->_color <Br>*****<Br>*****<Br>*****";
}


}





$pruebaheredada = new Rectangulo(2.5,3.5);

$pruebaheredada->SetColor("verde");


echo $pruebaheredada->ToString();

echo $pruebaheredada->Dibujar();

?>
