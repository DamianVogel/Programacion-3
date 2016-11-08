$(document).ready(function(){
	
	MostrarGrilla();
	
});


function GuardarMascota()
{
	 	
	$.ajax({
			url:"nexoadministrador.php",
			type: 'POST',
			
			data:{
				queHacer:"GuardarMascota",
				nombre : $("#nombre").val(),	
				edad : $("#edad").val(), 
				fechaDeNac : $("#fechaDeNac").val(),
				sexo : $('input:radio[name=sexo]:checked').val(),
				tipo : $("#tipo").val()
				 }
	})
	.then(function(grilla){
		
		alert("Mascota Ingresada con Exito");
		
		MostrarGrilla();
					//alert($("#tipo").val());

					$("#nombre").val("");	
					$("#edad").val("");
					$("#fechaDeNac").val("");
					$("#sexo").prop('checked',false);
					

					
	},function(grilla){
		alert("Error la mascota no fue guardada");

	});

}

function MostrarGrilla(){

	$.ajax({
		type: 'POST',
		url: "nexoadministrador.php",
		//dataType: "html",
		data:{queHacer:"MostrarGrilla"}

	}).then(function(grilla){
		$("#divprueba").html(grilla);

	},function(grilla){
		$("#divprueba").html("hay que revisarrrrr");
	});


}

 function ModificarMascota(mascota)
{
		
		$("#nombre").val(mascota.nombre);
		$("#edad").val(mascota.edad);
		$("#fechaDeNac").val(mascota.fechaDeNac);		
		//$("#tipo").attr("mascota.tipo");
		
		//console.log(mascota);

		if(mascota.tipo == "Perro")
		{
			alert("Es un perro");
		}//$("#tipo").val(mascota.tipo);
			else
			{
				alert("No lo toma");
			}

	$.ajax({
				type: 'POST',
				url: "nexoadministrador.php",
				data:
				{	queHacer:"ModificarMascota",
			  		mascota:mascota	
					
				}

	}).then(function(grilla){
		
		MostrarGrilla();
		
	},function(grilla){
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

	}).then(function(grilla){
		
		MostrarGrilla();
		
	}, function(grilla){
		$("#divprueba").html("pincho");
	});





}


