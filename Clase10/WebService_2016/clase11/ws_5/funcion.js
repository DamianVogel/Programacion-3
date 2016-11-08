function funcion()
{
	$.ajax({
//			type:'GET',
			url:"nexo.php"
			}



		).then(function(devolucion){
			$("#divprueba").html(devolucion);


		},function(){


		});




}