
//----------------------------------------------------------------------

	
	

//----------------------------------------------------------------------
	function Validar(){
	var verificar=true;
	var expreReNom =  /^[a-zA-ZÑñÁáÉéÍíÓóÚúÜü\s]+$/;
	var expreNum =/^[0-9a-zA-Z]+$/;
	var expreReEmail= /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
		
		var Email = document.getElementById("mail");
		var Clave = document.getElementById("pass");
		var Nombre = document.getElementById("nom");
		var Apellido = document.getElementById("ape");
		var Edad = document.getElementById("eda");
		var Telefono = document.getElementById("cell");
		var FechaNac = document.getElementById("fechanac");
		var Carrera = document.getElementById("carrera");
		var CV = document.getElementById("archi");

//----------------------------------------------------------------------
	 if (!Email.value){  
				alert("CAMPO EMAIL REQUERIDO");
				Email.focus();
				verificar=false;
		}
			else if(!expreReEmail.exec(Email.value)){
				alert("NO ES UN EMAIL PERMITIDO");
				Email.focus();
				verificar=false;
		}else if(Email.value.indexOf(" ")== 0){
				alert("EN EL CORREO INTRODUJO DE PRIMERO UN ESPACIO EN BLANCO");
				Email.focus();
				verificar=false
		}
//-----------------------------------------------------------------------------
	else if (!Clave.value ){  
				alert("SU CLAVE ES REQUERIDA");   
				Clave.focus();
				verificar=false;
		}
			else if(Clave.value.indexOf(" ")== 0){
				alert("EN LA CLAVE INTRODUJO DE PRIMERO UN ESPACIO EN BLANCO");
				Clave.focus();
				verificar=false
		}
			else if(Clave.value.length <= 5 ||Clave.value.length >= 15){  
				alert("SU CLAVE TIENE QUE TENER AL MENOS ENTRE 6 Y 15 CARACTERES");
				Clave.focus();
				verificar=false;
		}
			else if(!expreNum.exec(Clave.value)){  
				alert("SU CLAVE SOLO DEBE TENER LETRAS Y SIN CARACTERES EXPECIALES");
				Clave.focus();
				verificar=false;
		} 
//----------------------------------------------------------------------
// PARA VALIDAR EL NOMBRE
			else if (!Nombre.value ){  
				alert("SU NOMBRE ES REQUERIDO");   
				Nombre.focus();
				verificar=false;
		}
			else if(Nombre.value.indexOf(" ")== 0){
				alert("EN EL NOMBRE INTRODUJO DE PRIMERO UN ESPACIO EN BLANCO");
				Nombre.focus();
				verificar=false
		}
			else if(Nombre.value.length <= 5 ||Nombre.value.length >= 25){  
				alert("SU NOMBRE TIENE QUE TENER AL MENOS ENTRE 6 Y 25 CARACTERES");
				Nombre.focus();
				verificar=false;
		}
			else if(!expreReNom.exec(Nombre.value)){  
				alert("SU NOMBRE SOLO DEBE TENER LETRAS Y SIN CARACTERES EXPECIALES");
				Nombre.focus();
				verificar=false;
		}
		
	
//----------------------------------------------------------------------
// PARA VALIDAR EL APELLIDO
			else if (!Apellido.value ){  
				alert("SU APELLIDO ES REQUERIDO");   
				Apellido.focus();
				verificar=false;
		}
			else if(Apellido.value.indexOf(" ")== 0){
				alert("EN EL APELLIDO INTRODUZO DE PRIMERO UN ESPACIO EN BLANCO ");
				Apellido.focus();
				verificar=false;
		}
			else if(Apellido.value.length <= 5 ||Apellido.value.length >= 25){  
				alert("SU APELLIDO TIENE QUE TENER AL MENOS ENTRE 6 Y 25 CARACTERES");
				Apellido.focus();
				verificar=false;
		}
			else if(!expreReNom.exec(Apellido.value)){  
				alert("SU APELLIDO SOLO DEBE TENER LETRAS Y SIN CARACTERES EXPECIALES");
				Apellido.focus();
				verificar=false;
		}

//--------------------------------------------------------------------------------------------
//EDAD
		else if(isNaN(Edad.value)){	 
				alert("SE REQUIERE EL CAMPO EDAD SOLO CON NUMEROS");
				Edad.focus();
				verificar=false;
		}else if(Edad.value.indexOf(" ")== 0){
				alert("INTRODUZO DE PRIMERO UN ESPACIO EN BLANCO EN LA EDAD");
				Edad.focus();
				verificar=false;
		}else if(!Edad.value)
		{
			alert("SE REQUIERE EL CAMPO EDAD");
			Edad.focus();
			verificar=false;
		}
///--------------------------------------------------------------------------------
//TELEFONO----------------------------------------------------------------
		else if(isNaN(Telefono.value)){	 
				alert("SE REQUIERE EL CAMPO DEL TELEFONO CON SOLO NUMEROS");
				Telefono.focus();
				verificar=false;
		}else if(Telefono.value.indexOf(" ")== 0){
				alert("INTRODUZO DE PRIMERO UN ESPACIO EN BLANCO EN EL TELEFONO");
				Telefono.focus();
				verificar=false;
		}else if(!Telefono.value)
		{
			alert("SE REQUIERE EL CAMPO TELEFONO");
			Telefono.focus();
			verificar=false;
		}
//--------
//FECHA DE NACIMIENTO-------------------------------------------------------
		else if (!FechaNac.value){  //VERIFICACION DE FECHA DE NACIMIENTO
				alert("SE NECESITA EL CAMPO FECHA DE NACIMIENTO");
				FechaNac.focus();
				verificar=false;
		}
//----------------------------------------------------------------------
// Carrera
	else if (!Carrera.value){  
				alert("CAMPO CARRERA REQUERIDO");     
				Carrera.focus();
				verificar=false;
		}
			else if (Carrera.value.indexOf(" ") == 0){
				alert("NO PUEDE DEJAR AL COMIENZO UN ESPACIO EN BLANCO EN EL CAMPO CARRERA");
				Carrera.focus();
				verificar=false;
		}
			else if(Carrera.value.length <= 2 || Carrera.value.length >= 100){  
				alert("TIENE QUE HABER ENTRE 2 Y 100 CARACTERES EN EL CAMPO CARRERA");
				Carrera.focus();  
				verificar=false;
		}
//-------------------------------------------------------------------------------------
//ARCHIVO
	else if (!CV.value){  //VERIFICACION DE FECHA DE NACIMIENTO
				alert("SE NECESITA EL CAMPO DEL CURRICULU VITAE");
				CV.focus();
				verificar=false;
		}

//----------------------------------------------------------------------
	
 // VERIFICACION SI ESTAN TODOS LOS DATOS BIEN
		if(verificar){  
			aceptar=confirm("DESEA ACEPTAR ESTE REGISTRO");
			if(aceptar== true){
					document.getElementById("formulario").submit();
				}else{
					function redireccionando() 
						{
							location.href=pagina;
						}
				}
		}

		}

			window.onload = function(){
		var botonRegistrar; //botonLimpiar;
			
			/*//BOTON DE ELIMINAR
			botonLimpiar = document.getElementById("eliminar");
			botonLimpiar.onclick = limpiarfor;*/
			
			
			// BOTON DE REGISTRAR
			botonRegistrar = document.getElementById("formu");         
			botonRegistrar.onclick = Validar;
			
		}
//----------------------------------------------------------------------



	
