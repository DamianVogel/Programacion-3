<?php 
		include("Mascota.php");

		

		
		
		$seleccion = $_POST['queHacer'];


		switch ($seleccion) {
			case 'GuardarMascota':
				$nuevaMascota = new Mascota($_POST['nombre'],$_POST['edad'],$_POST['fechaDeNac'],$_POST['sexo'],$_POST['tipo']);
				$nuevaMascota->GuardarEnArchivo($nuevaMascota);

				break;

			case 'MostrarGrilla':

				$ArrayDeMascotas = Mascota::TraerMascotas();

					$grilla = '<table class="table">
									<thead style="background:rgb(14, 26, 112);color:#fff;">
										<tr>
											<th>  NOMBRE </th>
											<th>  EDAD     </th>
											<th>  FOTO       </th>
											<th>  FECHA DE NAC     </th>
											<th>  SEXO        </th>
										</tr> 
									</thead>';   	

						foreach ($ArrayDeMascotas as $masc){
							//echo $masc->ToString();
							$mascota = array();
							$mascota["nombre"] = $masc->nombre;
							$mascota["edad"] = $masc->edad;

							$mascota = json_encode($mascota);
						
							$grilla .= "<tr>
											<td>".$masc->GetNombre()."</td>
											<td>".$masc->edad."</td>										
											<td>".$masc->fechaDeNac."</td>										
											<td>".$masc->sexo."</td>										
											<td>".$masc->tipo."</td>										
											
											<td><input type='button' value='Eliminar' class='MiBotonUTN' id='btnEliminar' onclick='EliminarProducto($mascota)' />
												<input type='button' value='Modificar' class='MiBotonUTN' id='btnModificar' onclick='ModificarProducto($mascota)' /></td>
										</tr>";
						}
						
						$grilla .= '</table>';		
						
						echo $grilla;
						
						break;		
			


			default:
				# code...
				break;
		}



		



		






 ?>