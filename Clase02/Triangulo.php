<?php

require_once 'Ejercicio POO.php';

class Triangulo extends FiguraGeometrica
{	
	
	private $_altura;
	private $_base;


	function __construct($altura, $base )
	{
		parent::__construct();
		$this->_altura=$altura;		
		$this->_base=$base;
		$this->CalcularDatos();

	}

function CalcularDatos()
{
	$this->_perimetro = $this->_base + 2*(sqrt(pow(($this->_base/2),2)+(pow(($this->_altura),2))));
	$this->_superficie= $this->_base*($this->_altura/2);
}

function Dibujar()
{
	return "<Br>El triangulo es de color $this->_color <Br>&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;<Br>&nbsp;&nbsp;***<Br>*****<Br>";
	
}


}





$triangulo = new Triangulo(10,5);

$triangulo->SetColor("azul");


echo $triangulo->ToString();

echo $triangulo->Dibujar();

echo $triangulo->CalcularDatos();


?>
