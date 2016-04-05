var peticionHTTP;

	//FUNCION QUE VERIFICA CUAL REQUEST USAR
	function inicializar_XHR () {
		if(window.XMLHttpRequest){//si el navegador usa XMLHttp
			peticionHTTP= new XMLHttpRequest();
		}//end if
		else{//en caso de que el request del navegador sea antiguo
			peticionHTTP= ActiveXObject("Microsoft.XMLHTTP");

		}
	}//end function



//faire la liste de horses
function llenarlistaprov(consulta){
		//ONTEBER EL VALOR DEL DIV
		lista= document.getElementById('lista');
		lista.innerHTML= consulta;

	}


//delete horses
function deleteHorse(a){
	if (confirm("Are you sure that you want to delete it?") == true) {//en caso de aceptar
    	inicializar_XHR();//inicsializa el HTTPrequest
		peticionHTTP.open("POST", "../php/delete.php", true);//ubica el archivo y manda datos con el metodo POST asincrono
		peticionHTTP.onreadystatechange = function() {
				if(peticionHTTP.readyState == 4)// valor numerico del estado de la peticion
					if(peticionHTTP.status == 200){// valor numerico de una respuesta correcta
						//alert(peticionHTTP.responseText);
						llenarlistaprov(peticionHTTP.responseText);
			}//end if
		}//es la funcion de respuesta

		peticionHTTP.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//se usa para el post
	//se obtiene el id de la persona
	var id= a.getAttribute('id_horse');
	//alert(id);
	parametros = "id=" + id;
	peticionHTTP.send(parametros);
    }//end if confirmacion 
}



//Paginacion horse

function paginacionHorse(a){
	id = a.getAttribute('id');
	//alert(id);
	inicializar_XHR();//inicsializa el HTTPrequest
		peticionHTTP.open("POST", "../php/objetos.php", true);//ubica el archivo y manda datos con el metodo POST asincrono
		peticionHTTP.onreadystatechange = function() {
				if(peticionHTTP.readyState == 4)// valor numerico del estado de la peticion
					if(peticionHTTP.status == 200){// valor numerico de una respuesta correcta
						llenarlistaprov(peticionHTTP.responseText);
						document.getElementById(id).setAttribute('class','pagseleccionado');
			}//end if
		}//es la funcion de respuesta

		peticionHTTP.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//se usa para el post
	//se obtiene el id de la persona
	//var id= a.getAttribute('id');
	//alert(id);
	parametros = "inicio=" + id;
	//alert(parametros);
	peticionHTTP.send(parametros);
}

function validarDatosInsert(){
	name = document.getElementById("name").value;
    general_state= document.getElementById("general_state").value;
    description = document.getElementById("description").value;
    race = document.getElementById("race").value;
    level = document.getElementById("level").value;
    exp = document.getElementById("exp").value;
  
    
    verificar = true;
    if(name.length == 0 || name.length == null ){
      document.getElementById("name").focus();
      verificar=false;
     }
      else if(general_state.length == 0 || general_state.length == null){
      document.getElementById("general_state").focus();
      verificar=false;
     }
     else if(description.length == 0 || description.length == null){
      document.getElementById("description").focus();
      verificar=false;
  }
   else if(race.length == 0 || race.length == null){
      document.getElementById("race").focus();
      verificar=false;
  }
    else if(level.length == 0 || level.length == null){
      document.getElementById("level").focus();
      verificar=false;
  }
    else if(exp.length == 0 || exp.length == null){
      document.getElementById("exp").focus();
      verificar=false;
  }


else
{
	//alert(verificar);
  	insertar();

}
 
  		
  		
  	}//end validate ajax
  	

//insert horse data
function insertar(){
		inicializar_XHR();//inicializa el HTTPrequest
		peticionHTTP.open("POST", "../php/inserthorse.php", true);//ubica el archivo y manda datos con el metodo POST asincrono
		peticionHTTP.onreadystatechange = verificarInsert;//es la funcion de respuesta
		peticionHTTP.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//se usa para el post

		//SE OBTIENEN LOS VALORES Y SE cONCATENAN EN UNA VARIABLE
	parametros = "name=" + document.getElementById("name").value;
    parametros += "&general_state=" + document.getElementById("general_state").value;
    parametros += "&description=" + document.getElementById("description").value;
    parametros += "&race=" + document.getElementById("race").value;
    parametros += "&level=" + document.getElementById("level").value;
    parametros += "&exp=" + document.getElementById("exp").value;
 
    
    //alerta de los valores enviados
    alert("Parametros: " + parametros);

    //linea Importante... Envia los datos como parametros al archivo URL
   	peticionHTTP.send(parametros);
	}

//funcion que se realiza en el cambio de la pagina
	function verificarInsert(){
		if(peticionHTTP.readyState == 4)// valor numerico del estado de la peticion
			if(peticionHTTP.status == 200){// valor numerico de una respuesta correcta
				//alert(peticionHTTP.responseText);
				if(peticionHTTP.responseText!=null)
					//manda la lista de la consulta
					llenarlistaprov(peticionHTTP.responseText);
					limpiar3();
			}//end if
		}
	

	//AL TERMINO DE ENVIAR LOS DATOS SE LIMPIAN LAS CAJAS
	function limpiar3(){
	document.getElementById("name").value="";
    document.getElementById("general_state").value="";
    document.getElementById("description").value="";
    document.getElementById("race").value="";
    document.getElementById("level").value="";
    document.getElementById("exp").value="";

    //MENSAJE
    mensaje = document.getElementById("mensaje");//obtiene el elemento
	mensaje.innerHTML = "Successful! <a href='#' onclick='borrar2()'>Ok</a>";//A partir de DOM le da un texto
	
	document.getElementById("checknom").innerHTML="";
    document.getElementById("checkempre").innerHTML="";
    document.getElementById("checktel").innerHTML="";
    document.getElementById("checkcorreo").innerHTML="";

    document.getElementById("name").setAttribute('class','correcto');
    document.getElementById("general_state").setAttribute('class','correcto');
    document.getElementById("description").setAttribute('class','correcto');
    document.getElementById("race").setAttribute('class','correcto');
        document.getElementById("level").setAttribute('class','correcto');
    document.getElementById("exp").setAttribute('class','correcto');


    document.getElementById("mensajeerror").innerHTML="";
	}//end limpiar
