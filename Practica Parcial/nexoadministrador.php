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
											<th>  FECHA DE NAC       </th>
											<th>  TIPO      </th>
											<th>  SEXO         </th>
										</tr> 
									</thead>';   	

						foreach ($ArrayDeMascotas as $masc){
							//echo $masc->ToString();
							$mascota = array();
							$mascota["nombre"] = $masc->GetNombre();
							$mascota["edad"] = $masc->GetEdad();

							$mascota = json_encode($mascota);
						
							$grilla .= "<tr>
											<td>".$masc->GetNombre()."</td>
											<td>".$masc->GetEdad()."</td>										
											<td>".$masc->GetFecha()."</td>										
											<td>".$masc->GetSexo()."</td>										
											<td>".$masc->GetTipo()."</td>										
											
											<td><input type='button' value='Eliminar' class='MiBotonUTN' id='btnEliminar' onclick='EliminarProducto($mascota)' />
												<input type='button' value='Modificar' class='MiBotonUTN' id='btnModificar' onclick='ModificarProducto($mascota)' /></td>
										</tr><Br>";
						}
						
						$grilla .= '</table>';		
						
						echo $grilla;
						
						break;		
			


			default:
				# code...
				break;
		}



		



		






 ?>