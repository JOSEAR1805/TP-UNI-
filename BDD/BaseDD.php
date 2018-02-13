<?php
//clase para conectarse a la base de datos
class Conexion extends PDO{
	private $tipo_de_base='pgsql';
	private $host='localhost';
	private $nombre_de_base='TP_UNI';
	private $usuario='postgres';
	private $clave='informatica';
	
	public function __construct() {
	//sobreescribo el metodo construct de la clase PDO
	try{
		parent::__construct($this->tipo_de_base.':host='.$this->host.'; dbname='.$this->nombre_de_base.'; port=5432',
		 $this->usuario,$this->clave);
	}catch(PDOException $e){
	echo 'Ha surgido un error y no se puede conectar a la base de datos. Detalle: ' . $e->getMessage();
    exit;
	}
  }
}

?>
