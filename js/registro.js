$(document).ready(function($) {
	comprobar();
});


function comprobar(){
   	var email_valido = 0;
	var clave_valida = 0;
	var nombre_valido = 0;
	var apellido_valido = 0;
	var clave_coincide = 0;
	var dni_valido=0;

	var boton= $('#registro');
	var email_regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	var	clave_regex = /^[a-zA-Z0-9]{6,12}$/;
	var nombre_regex = /^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]{2,50}$/;
	var apellido_regex = /^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]{2,50}$/;
	var dni_regex = /^[0-9]{8,9}$/;

	$("#nombre").keyup(function() {
		var nombre= $('#nombre').val();
		  // console.log(nombre);

		if ( nombre_regex.test(nombre)){
			nombre_valido =1;			
			   console.log("ok");
			
		   }else{
			   nombre_valido =0;
		   }
		   if (nombre_valido==1 && clave_valida ==1 && apellido_valido ==1 && clave_coincide ==1 && dni_valido==1 && email_valido==1) {
		   boton.removeClass('disabled');
		   }else{
		   boton.addClass('disabled')
		   }
	});

	$("#apellido").keyup(function() {
		var apellido= $('#apellido').val();
		   //console.log(email_valido);

		if ( apellido_regex.test(apellido)){
			apellido_valido =1;
			console.log("ok");
			
		   }else{
			   apellido_valido =0;
		   }
		   if (nombre_valido==1 && clave_valida ==1 && apellido_valido ==1 && clave_coincide ==1 && dni_valido==1 && email_valido==1) {
		   boton.removeClass('disabled');
		   }else{
		   boton.addClass('disabled')
		   }
	});

	$("#dni").keyup(function() {
		var dni= $('#dni').val();
		   //console.log(email_valido);

		if ( dni_regex.test(dni)){
			dni_valido =1;
			console.log("ok");
			
		   }else{
			   dni_valido =0;
		   }
		   if (nombre_valido==1 && clave_valida ==1 && apellido_valido ==1 && clave_coincide ==1 && dni_valido==1 && email_valido==1) {
		   boton.removeClass('disabled');
		   }else{
		   boton.addClass('disabled')
		   }
	});

	$("#email").keyup(function() {
			var email= $('#email').val();
		   	//console.log(email_valido);

			if ( email_regex.test(email)){
				email_valido =1;
				console.log("ok");
				
   			}else{
   				email_valido =0;
   			}
			if (nombre_valido==1 && clave_valida ==1 && apellido_valido ==1 && clave_coincide ==1 && dni_valido==1 && email_valido==1) {
				boton.removeClass('disabled');
   			}else{
   			boton.addClass('disabled')
   			}
		});
		



   		$("#contrasenia").keyup(function() {
   			var contrasenia = $('#contrasenia').val();

	    if (clave_regex.test(contrasenia)) {
			 clave_valida=1;
			 console.log("ok");
			 
   		}else{
   			clave_valida =0;
   		}
      	   	//console.log(clave_valida+"clave");


		if (nombre_valido==1 && clave_valida ==1 && apellido_valido ==1 && clave_coincide ==1 && dni_valido==1 && email_valido==1) {
					boton.removeClass('disabled');
   		}else{
   			boton.addClass('disabled')
   			}
		});


		$("#contrasenia2").keyup(function(){
			var contrasenia2 = $("#contrasenia2").val();
			var contrasenia = $('#contrasenia').val();
			
			if(contrasenia==contrasenia2){
				clave_coincide = 1;
				console.log("ok");
				
			}else{
				clave_coincide=2;
			}
			if (nombre_valido==1 && clave_valida ==1 && apellido_valido ==1 && clave_coincide ==1 && dni_valido==1 && email_valido==1) {
				boton.removeClass('disabled');
	   		}else{
		   boton.addClass('disabled')
		   }
		})
	

	
	}






/*var campoEmail = document.getElementById("email");
    emvalido = document.getElementById("emailOK");
    emregex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (! emregex.test(campoEmail.value)){
        emvalido.innerText = "El email ingresado no es valido";
    }
    campoEmail.addEventListener('input', function(evt) {
        const emcampo = evt.target;
        if (emregex.test(emcampo.value)) {
          emvalido.innerText = "mail correcto";
        } else {
          emvalido.innerText = "El email ingresado no es valido";
        }
      });*/