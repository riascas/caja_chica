$(document).ready(function($) {
	comprobar();
});


function comprobar(){
   	var email_valido = 0;
   	var clave_valida = 0;
	var boton= $('#boton_ingresar');
	var emregex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	var	clregex = /^[a-zA-Z0-9]{6,12}$/;


	$("#email").keyup(function() {
			var email= $('#email').val();
		   	//console.log(email_valido);

			if ( emregex.test(email)){
				email_valido =1;
   			}else{
   				email_valido =0;
   			}
   			if (email_valido==1 && clave_valida ==1) {
   			boton.removeClass('disabled');
   			}else{
   			boton.addClass('disabled')
   			}
		});
		



   		$("#contrasenia").keyup(function() {
   			var contrasenia = $('#contrasenia').val();

	    if (clregex.test(contrasenia)) {
     		clave_valida=1;
   		}else{
   			clave_valida =0;
   		}
      	   	//console.log(clave_valida+"clave");


     	if (email_valido==1 && clave_valida ==1) {
   			boton.removeClass('disabled');
   		}else{
   			boton.addClass('disabled')
   			}
		});

	
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