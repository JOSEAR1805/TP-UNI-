<?php
session_start();
require_once '../../../BDD/conectarBDD.php';
	
	if(isset($_SESSION['user'])){ 
		
	}else{
		echo '<script>window.location="../login.php";</script>';
	}


?>

		<!DOCTYPE html>
<html>
<head>
	<title>VISTA DE USUARIO</title>
	<meta charset="utf-8">
</head>
<body>
<article>
	<p>
		There is a nuance we found with 
		session timing out 
		although the user is still active 
		in the session. 
		The problem has to do with never 
		modifying the session ..
		<?php echo "nombre de usuario:".$_SESSION['user'];  ?>      
	</p>
</article>
	
	<a href="pagina_salir/logout.php"><button>Salir</button></a> 

</body>
</html>