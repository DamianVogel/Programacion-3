

<?php

abstract Class FiguraGeometrica
{
	protected $_color;
	protected $_perimetro;
	protected $_superficie;

	function __construct()	{
							$this->_color="";
							$this->_perimetro=0;
							$this->_superficie=0;
							}										


	public function ToString()
	{	
		"<Br>";
		return $this->_color." ".$this->_perimetro." ".$this->_superficie;
	
	}

	protected abstract function CalcularDatos();

	abstract function Dibujar();

	public function GetColor ()
	{
		return $this->_color;
	}

	public function SetColor ($color)
	{
		$this->_color=$color;
	} 

}


/**
* 
*/
// class ClassName extends FiguraGeometrica
// {	
// 	function __construct()
// 	{
// 		parent::__construct();
// 	}
// }

// //$prueba = new FiguraGeometrica();


// $pruebaheredada = new ClassName();

// //echo $prueba->ToString();

// echo $pruebaheredada->ToString();

?>



