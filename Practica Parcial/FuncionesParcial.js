function GuardarMascota()
{
	 
	var nombre = $("#nombre").val();
	var edad = $("#edad").val();
	var fechaDeNac = $("#fecha de nacimiento").val(); 
	var sexo = $("#sexo").val();
	var tipo = $("#tipo").val();

	var mascota = {};
	mascota.nombre=nombre;
	mascota.edad=edad;
	mascota.fechaDeNac=fechaDeNac;
	mascota.sexo=sexo;
	mascota.tipo=tipo;

	$.ajax({
			url:"nexoadministrador.php",
			type: 'POST',
			//dataType: "json",
			data:{
				queHacer:"GuardarMascota",
				mascota : $("#nombre").val()	
				}
	})
	.done(function(grilla){
		$("#divprueba").html("Mascota Guardada con Exito");

	}).fail(function(grilla){
		alert("falla pero funca como loco");

	});

}