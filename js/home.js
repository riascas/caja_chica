$(document).ready(function($) {
	comprobar_ingreso();
	comprobar_gasto();
});


function comprobar_ingreso(){
   	var ingreso_valido = 0;
	var fecha_valida = 0;
	var descripcion_valida = 0;
	   
	var boton_ingreso= $('#boton_cargar_ingreso');
	var	ingreso_regex = /^[0-9]{1,11}$/;
	var descripcion_regex = /^[0-9a-zA-ZñÑáéíóúÁÉÍÓÚ\s]{2,50}$/;
	var fecha_regex =/^([0-2][0-9]|(3)[0-1])(\/)(((0)[0-9])|((1)[0-2]))(\/)\d{4}$/;
	var fecha_estandar_regex=/([12]\d{3}-(0[1-9]|1[0-2])-(0[1-9]|[12]\d|3[01]))/;



//validar ingresos

	$("#ingreso").keyup(function() {
			var ingreso= $('#ingreso').val();

			if ( ingreso_regex.test(ingreso)){

				console.log("ok");
				
				ingreso_valido =1;
   			}else{
   				ingreso_valido =0;
   			}
   			if (ingreso_valido==1 && fecha_valida ==1 && descripcion_valida ==1) {
   			boton_ingreso.removeClass('disabled');
   			}else{
   			boton_ingreso.addClass('disabled')
   			}
		});

		$("#descripcion_ingreso").keyup(function() {
			var desc_ingreso= $('#descripcion_ingreso').val();

			if ( descripcion_regex.test(desc_ingreso)){

				console.log("ok");
				
				descripcion_valida =1;
   			}else{
				descripcion_valida =0;
   			}
   			if (ingreso_valido==1 && fecha_valida ==1 && descripcion_valida ==1) {
   			boton_ingreso.removeClass('disabled');
   			}else{
   			boton_ingreso.addClass('disabled')
   			}
		});


		$("#fecha_ingreso").change(function() {
			var fecha_ingreso= $('#fecha_ingreso').val();
			console.log(fecha_ingreso);
			

			if ( fecha_estandar_regex.test(fecha_ingreso)){

				console.log("ok");
				
				fecha_valida =1;
   			}else{
				fecha_valida =0;
   			}
   			if (ingreso_valido==1 && fecha_valida ==1 && descripcion_valida ==1) {
   			boton_ingreso.removeClass('disabled');
   			}else{
   			boton_ingreso.addClass('disabled')
   			}
		});
		

	
	}



//validar gastos

	function comprobar_gasto(){
		var gasto_valido = 0;
	 var fecha_valida = 0;
	 var descripcion_valida = 0;
		
	 var boton_gasto= $('#boton_cargar_gasto');
	 var gasto_regex = /^[0-9]{1,11}$/;
	 var descripcion_regex = /^[0-9a-zA-ZñÑáéíóúÁÉÍÓÚ\s]{2,50}$/;
	 var fecha_gasto_regex =/^([0-2][0-9]|(3)[0-1])(\/)(((0)[0-9])|((1)[0-2]))(\/)\d{4}$/;
	 var fecha_estandar_regex=/([12]\d{3}-(0[1-9]|1[0-2])-(0[1-9]|[12]\d|3[01]))/;
 
 
 
	 $("#gasto").keyup(function() {
			 var gasto= $('#gasto').val();
 
			 if ( gasto_regex.test(gasto)){
 
				 console.log("ok");
				 
				 gasto_valido =1;
				}else{
					gasto_valido =0;
				}
				if (gasto_valido==1 && fecha_valida ==1 && descripcion_valida ==1) {
				boton_gasto.removeClass('disabled');
				}else{
				boton_gasto.addClass('disabled')
				}
		 });
 
		 $("#descripcion_gasto").keyup(function() {
			 var desc_gasto= $('#descripcion_gasto').val();
 
			 if ( descripcion_regex.test(desc_gasto)){
 
				 console.log("ok");
				 
				 descripcion_valida =1;
				}else{
				 descripcion_valida =0;
				}
				if (gasto_valido==1 && fecha_valida ==1 && descripcion_valida ==1) {
				boton_gasto.removeClass('disabled');
				}else{
				boton_gasto.addClass('disabled')
				}
		 });
 
 
		 $("#fecha_gasto").change(function() {
			 var fecha_gasto= $('#fecha_gasto').val();
			 console.log(fecha_gasto);
			 
 
			 if ( fecha_estandar_regex.test(fecha_gasto)){
 
				 console.log("ok");
				 
				 fecha_valida =1;
				}else{
				 fecha_valida =0;
				}
				if (gasto_valido==1 && fecha_valida ==1 && descripcion_valida ==1) {
				boton_gasto.removeClass('disabled');
				}else{
				boton_gasto.addClass('disabled')
				}
		 });
		 
 
	 
	 }
 



