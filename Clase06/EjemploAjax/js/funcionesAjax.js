
function MostrarError()
{
	// var funcionAjax=$.ajax({url:"nexoNoExiste.php",type:"post",data:{queHacer:"MostrarTexto"}});
	// funcionAjax.done(function(retorno){
	// 	$("#principal").html(retorno);
	// 	$("#informe").html("Correcto!!!");
	// });
	// funcionAjax.fail(function(retorno){
	// 		$("#principal").html("error :(");
	// 	$("#informe").html(retorno.responseText);		
	// });
	// funcionAjax.always(function(retorno){
	// 	//alert("siempre "+retorno.statusText);
	// });
	$.ajax({url:"NoExiste.php"}).then(function(respuesta){
		alert("primero"+respuesta);
		console.info("primero",respuesta);
	},function(respuesta){
		alert("segundo"+respuesta);
		console.info("segundo",respuesta);
	}); 


	//Esto devuelve retorno o "call backs".

	//Esto devuelve dos cosas, error o el correcto (como string)

	//ajax sirve para comunicarme con mi servido r de base de datos o tambien sirve para comunicarme con mi servidor api.


}
function MostrarSinParametros()
{
	// var funcionAjax=$.ajax({url:"nexoTexto.php"});

	// funcionAjax.done(function(retorno){
	// 	$("#principal").html(retorno);
	// 	$("#informe").html("Correcto!!!");
	// });
	// funcionAjax.fail(function(retorno){
	// 	$("#principal").html(":(");
	// 	$("#informe").html(retorno.responseText);	
	// });
	// funcionAjax.always(function(retorno){
	// 	//alert("siempre "+retorno.statusText);

	// });
	

	//ACA EMPECE YO!
	// $.ajax({url:"nexoTexto.php"}).then(function(respuesta){
	// 		$("#principal").html(respuesta);
			

	// },function(respuesta){
	// 		$("#principal").html("no encontro nada");
	// });

	$.ajax({url:"php/PruebasDV/PruebasDV.php"}).then(function(prueba){
		$("#principal").html(prueba);

	},function(prueba){
		$("#principal").html("no trae nada");
	});


}

function Mostrar(queMostrar)
{
		//alert(queMostrar);
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{queHacer:queMostrar}
	});
	funcionAjax.done(function(retorno){
		$("#principal").html(retorno);
		$("#informe").html("Correcto!!!");	
	});
	funcionAjax.fail(function(retorno){
		$("#principal").html(":(");
		$("#informe").html(retorno.responseText);	
	});
	funcionAjax.always(function(retorno){
		//alert("siempre "+retorno.statusText);

	});
}

function MostarLogin()
{
		//alert(queMostrar);
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{queHacer:"MostarLogin"}
	});
	funcionAjax.done(function(retorno){
		$("#principal").html(retorno);
		$("#informe").html("Correcto Form login!!!");	
	});
	funcionAjax.fail(function(retorno){
		$("#botonesABM").html(":(");
		$("#informe").html(retorno.responseText);	
	});
	funcionAjax.always(function(retorno){
		//alert("siempre "+retorno.statusText);

	});
}

