<?php
	session_start();//INICIAMOS SESION SIEMPRE ARRIBA DE CUALQUIER CODIGO HTML
?>


<!DOCTYPE html>
<html>
<head>
	<title>Validando...</title>
	<meta charset="utf-8">
</head>
<body>

	<?php
		require_once "../BDD/conectarBDD.php";
				if(isset($_POST['Entrar'])){
					$usuario=$_POST['mail'];
					$pw=$_POST['pass'];
					$log=pg_query("SELECT * FROM usuarios_indi WHERE email='$usuario' AND clave='$pw'");
					if (pg_num_rows($log)>0){
						$row=pg_fetch_array($log);
						$_SESSION["user"]=$row['nombre'];

						echo 'Iniciando sesion para'.$_SESSION['user'].'<p>';
						echo '<script> window.location="../Vista/Paginas_usu_indi/paginas/pagina_usu_principal.php"; </script>';

					}else{
						echo '<script>alert("Usuario o Contraseña Incorrectos")</script>';//MENSAJE DE ALERTA INDICANDO ERROR
						echo '<script>window.location="../Vista/login.php";</script>';//MANDAMOS A LA PAGINA PRINCIPAL
			

					}

				}

	?>

</body>
</html>