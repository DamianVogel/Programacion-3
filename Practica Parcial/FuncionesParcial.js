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
				sexo : $("#sexo").val(),
				tipo : $("#tipo").val()
				 }
	})
	.done(function(grilla){
		$("#divprueba").html("Mascota Guardada con Exito");

	}).fail(function(grilla){
		alert("falla pero funca como loco");

	});

}

function MostrarGrilla(){

	$.ajax({
		type: 'POST',
		url: "nexoadministrador.php",
		dataType: "html",
		data:{queHacer:"MostrarGrilla"}

	}).done(function(grilla){
		$("#divprueba").html(grilla);

	}).fail(function(grilla){
		$("#divprueba").html("hay que revisarrrrr");
	});


}