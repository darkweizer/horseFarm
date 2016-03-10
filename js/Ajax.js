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
		peticionHTTP.open("POST", "delete.php", true);//ubica el archivo y manda datos con el metodo POST asincrono
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
		peticionHTTP.open("POST", "objetos.php", true);//ubica el archivo y manda datos con el metodo POST asincrono
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