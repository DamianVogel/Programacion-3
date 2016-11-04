$(document).ready(function(){
	
	MostrarGrilla();
	
});


function GuardarMascota()
{
	 	
	$.ajax({
			url:"nexoadministrador.php",
			type: 'POST',
			//dataType: "json",
			data:{
				queHacer:"GuardarMascota",
				nombre : $("#nombre").val(),	
				edad : $("#edad").val(), 
				fechaDeNac : $("#fechaDeNac").val(),
				sexo : $('input:radio[name=sexo]:checked').val(),
				//sexoh : $("#sexohembra").attr(),
				tipo : $("#tipo").val()
				 }
	})
	.done(function(grilla){
		
		alert("Mascota Ingresada con Exito");
		MostrarGrilla();
					$("#nombre").val("");	
					$("#edad").val("");
					$("#fechaDeNac").val("");
					$("#sexo").val();
					$("#tipo").val();


	}).fail(function(grilla){
		alert("Error la mascota no fue guardada");

	});

}

function MostrarGrilla(){

	$.ajax({
		type: 'POST',
		url: "nexoadministrador.php",
		//dataType: "html",
		data:{queHacer:"MostrarGrilla"}

	}).done(function(grilla){
		$("#divprueba").html(grilla);

	}).fail(function(grilla){
		$("#divprueba").html("hay que revisarrrrr");
	});


}

 function ModificarMascota(mascota)
{
		
		$("#nombre").val(mascota.nombre);
		$("#edad").val(mascota.edad);
		$("#fechaDeNac").val(mascota.fechaDeNac);
		//$("#sexo").val(mascota.sexo);

		document.getElementById("sexo").checked = true;

		$("#tipo").val(mascota.tipo);


	$.ajax({
		type: 'POST',
		url: "nexoadministrador.php",
		//dataType: "html",
		data:{queHacer:"ModificarMascota",
			  mascota:mascota	
			}

	}).done(function(grilla){
		MostrarGrilla();
		
	}).fail(function(grilla){
		$("#divprueba").html("pincho");
	});



}

function EliminarMascota(mascota)
{

	$.ajax({
		type: 'POST',
		url: "nexoadministrador.php",
		//dataType: "html",
		data:{queHacer:"EliminarMascota",
			  mascota:mascota	
			}

	}).done(function(grilla){
		MostrarGrilla();
		
	}).fail(function(grilla){
		$("#divprueba").html("pincho");
	});





}


