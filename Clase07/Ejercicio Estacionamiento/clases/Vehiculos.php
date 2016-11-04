<?php
require_once"accesoDatos.php";
class Vehiculo
{
//--------------------------------------------------------------------------------//
//--ATRIBUTOS
	private $patente;
	private $date;
 	
//--------------------------------------------------------------------------------//

//--------------------------------------------------------------------------------//
//--GETTERS Y SETTERS
  	public function GetPatente()
	{
		return $this->patente;
	}
	public function GetDate()
	{
		return $this->date;
	}
	

	public function SetPatente($patente)
	{
		$this->patente = $pantente;
	}
	public function SetDate($date)
	{
		$this->apellido = $date;
	}
	
//--------------------------------------------------------------------------------//
//--CONSTRUCTOR
	public function __construct($patente =NULL)
	{
		if($patente != NULL){
			$obj = Vehiculo::TraerUnVehiculo($vehiculo);
			
			$this->patente = $obj->patente;
			$this->date = $obj->date;
			
			}
	}

//--------------------------------------------------------------------------------//
//--TOSTRING	
  	public function ToString()
	{
	  	return $this->patente."-".$this->date;
	}
//--------------------------------------------------------------------------------//

//--------------------------------------------------------------------------------//
//--METODO DE CLASE
	public static function TraerUnVehiculo($vehiculo) 
	{	


		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta =$objetoAccesoDato->RetornarConsulta("select * from estacionamiento where id='$vehiculo->patente'");
		$consulta->bindValue('patente', $vehiculo->patente, PDO::PARAM_INT);
		$consulta->execute();
		$vehiculoBuscado= $consulta->fetchObject('patente');
		return $vehiculoBuscado;	
					
	}
	
	public static function TraerTodosLosVehiculos()
	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta =$objetoAccesoDato->RetornarConsulta("select * from estacionamiento");
		$consulta->execute();			
		$arrVehiculos= $consulta->fetchAll(PDO::FETCH_CLASS, "estacionamiento");	
		return $arrVehiculos;
	}
	
	public static function Borrar($patente)
	{	
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso();
		$consulta = $objetoAccesoDato->RetornarConsulta("delete from estacionamiento where patente='$patente'");
		$consulta->execute();
		
	}
	
	public static function Modificar($vehiculo)
	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso();
		$consulta = $objetoAccesoDato->RetornarConsulta("update persona set patente='$vehiculo->patente',fecha='$vehiculo->date' where patente='$vehiculo->patente'");
		$consulta->execute();

	}

//--------------------------------------------------------------------------------//

//--------------------------------------------------------------------------------//

	public static function Insertar($vehiculo)
	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta = $objetoAccesoDato->RetornarConsulta("INSERT into estacionamiento(patente,fecha)values('$vehiculo->patente','$vehiculo->date')");
		$consulta->execute();
				
	}	
//--------------------------------------------------------------------------------//

}