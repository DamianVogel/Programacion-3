
function ingresar()
{
	
	 $.ajax({
	 		url:"nexo.php",
	 		type: "post",
	 		data:{
	 			usuario : $("#usuario").val(),	
				contrasenia : $("#contrasenia").val()
	 			}


	 })
	 .then(function(valor){
		
		alert(valor);


	 }),(function(valor){
		
		//alert("No anda");

	 });
		
	
		
	
		

		
}