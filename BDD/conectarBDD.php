<?php
 $user = "postgres"; //ESTOS DATOS SIEMPRE VAN DE ESTA MANERA
 $password = "informatica";
 $dbname = "TP_UNI";
 $port = "5432";
 $host = "localhost";

 	//LA CADENA DEBE IR EN ESTE ORDEN SIEMPRE
 	$cadenaconexion = "host=$host port=$port dbname=$dbname user=$user password=$password";

 	$conexion = pg_connect($cadenaconexion) or die("Error en la Conexion: ".pg_last_error());

 /*	$querymostrar="select * from usuarios";
	 $resultado = pg_query($conexion, $querymostrar) or die("Error en la Consulta SQL");
//------------------------------------------------------------------------------------------------


	 $mostrar= pg_num_rows($resultado);
  

	 while ($row = pg_fetch_array($resultado)){
			echo "NOMBRE:"." ".$row["nombre"]."<br>";
	 								
	}



	pg_close($conexion);*/
	
?>