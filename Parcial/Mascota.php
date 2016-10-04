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
//Propiedades--------------------------------------------------------------------
		public function GetNombre()
		{
			return $this->_nombre;
		}

		public function GetEdad()
		{
			return $this->_edad;
		}

		public function GetFecha()
		{
			return $this->_fechaDeNac;
		}

		public function GetTipo()
		{
			return $this->_tipo;
		}

		public function GetSexo()
		{
			return $this->_sexo;
		}

		public function SetNombre($nombre)
		{
			$this->_nombre=$nombre;
		}

		public function SetEdad($edad)
		{
			$this->_edad=$edad;
		}

		public function SetFecha($fecha)
		{
			$this->_fechaDeNac=$fecha;
		}

		public function SetTipo($tipo)
		{
			$this->_tipo=$tipo;
		}

		public function SetSexo($sexo)
		{
			$this->_sexo=$sexo;
		}




//Funciones--------------------------------------------------------------------------------------------------------------

		static function GuardarEnArchivo($mascota)
		{
			$archivo = fopen("MascotasIngresadas.php","a");

			fwrite($archivo, $mascota->ToString());
			fclose($archivo);

		}

		static function TraerMascotas()
		{
			$listadoMascotas= array();

			$archivo=fopen("MascotasIngresadas.php","r");

			while(!FeoF($archivo))
			{
				$renglon=fgets($archivo);

				$obj = explode("-", $renglon);
				
				$obj[0] = trim($obj[0]); 
				unset($obj[5]);


				 if($obj[0]!="")
				{
				$mascota = new mascota($obj[0], $obj[1], $obj[2], $obj[3], $obj[4]);

				$listadoMascotas[]=$mascota;
				}
				
			}

			fclose($archivo);
			//echo var_dump($listadoMascotas);
			return $listadoMascotas;

		}

		static function Modificar($obj)
		{
			

			$listadoMascotas = Mascota::TraerMascotas();

			$nuevoList = array();
			
			//echo var_dump($listadoMascotas);

			for($i=0;$i<count($listadoMascotas);$i++) 
			{
					if(!$obj->_nombre == $listadoMascotas[$i]->_nombre)
					{
						$nuevoList[]=$listadoMascotas[$i];							
					}
			}
		
			

			$archivo= fopen("MascotasIngresadas.php","w");

			foreach ($nuevoList as $masc) 
			{
				fwrite($archivo, $masc->ToString());
			}

			fclose($archivo);

		}



		



		function ToString()
		{
			return $this->_nombre."-".$this->_edad."-".$this->_fechaDeNac."-".$this->_tipo."-".$this->_sexo."\r\n";
		}



}//fin de la clase


 ?>