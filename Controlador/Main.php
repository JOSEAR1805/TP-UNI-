<?php
//INVESTIGAR (NEW SELF)

include_once ("../Modelo/Usuarios_Indi.php");
//agregar en la base de datos
$email=$_POST['mail'];
$clave=$_POST['pass'];
$nombre=$_POST['nom'];
$apellido=$_POST['ape'];
$edad=$_POST['eda'];
$celular=$_POST['cell'];
$fechana=$_POST['fechanac'];
$carrera=$_POST['carrera'];
$archivo=$_POST['archi'];
$tipo="I";

$Usus=new Usus($email,$clave,$tipo,$nombre,$apellido,$edad,$celular,$fechana,$carrera,$archivo);
$Usus->guardar();
echo 'Se guardo el nombre: ' .$Usus->GetNombre();


//echo '<script> window.location="../Vista/login.php";</script>';

//MOSTRAR POR ID
/*$persona=Usuarios::BuscarId(3);
if($persona)
{
	echo $persona->getNombre();
	echo "<br>";
	echo 'RESULTADO EXITOSO';
}else
{
	echo "RESULTADO NO EXITOSO";
}

$persona=Usuarios::RecuperarTodo();*/
?>
