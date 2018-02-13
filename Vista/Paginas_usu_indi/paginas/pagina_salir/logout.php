<?php
session_start();
require_once '../../../../BDD/conectarBDD.php';
session_destroy();

echo 'Cerraste sesion';
echo '<script>window.location="../../../login.php"</script>';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Saliendo....</title>
	<meta charset="utf-8">
</head>
<body>

</body>
</html>