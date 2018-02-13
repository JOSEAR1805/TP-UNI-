<?php
session_start();

require_once '../BDD/conectarBDD.php';
	if(isset($_SESSION['user'])){
		echo '<script> window.location="Pagina_usu.php";</script>';
	}
//SI NO SE QUEDA EN ESTA
?>


<html>
<head>
	<title></title>
</head>
<body>
	<form action='../Modelo/validacion_login.php' method="post">
		Email<input type='text' name='mail'>
		Contraseña<input type='password' name='pass'>
		<input type='submit' name='Entrar'>
	</form>
	
	<a href="Paginas_usu_indi/Formulario_Registro/formulario_indi.php"><button>Registrar Usuario Individual</button></a>
	<a href="Formulario_Registro/formulario_cor.php"><button>Registrar Usuario Empresarial</button></a>

</body>
</html>