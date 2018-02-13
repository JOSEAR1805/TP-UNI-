<?php
require_once '../BDD/BaseDD.php';

class Usus{
	private $email;
	private $clave;
	private $tipo;
	private $nombre;
	private $apellido;
	private $edad;
	private $celular;
	private $fechana;
	private $carrera;
	private $archivo;
	
	const TABLA = 'usuarios_indi';

//----------------------------------------------------------------------	
	public function GetEmail(){
		return $this->Email;
	}

	public function SetEmail($Email){
		$this->Email=$Email;
	}
//-----------------------------------------------------------------------
	public function GetClave(){
		return $this->clave;
	}

	public function SetClave($clave){
		$this->clave=$clave;
	}
//------------------------------------------------------------------------
	public function GetTipo(){
		return $this->tipo;
	}

	public function SetTipo($tipo){
		$this->tipo=$tipo;
	}
//----------------------------------------------------------------------	
	public function GetNombre(){
		return $this->nombre;
	}

	public function SetNombre($nombre){
		$this->nombre=$nombre;
	}
//-----------------------------------------------------------------------
	 public function GetApellido(){
    	return $this->apellido;
    }

	public function SetApellido($apellido) {
       $this->apellido=$apellido;
    }
 //----------------------------------------------------------------------
    public function GetEdad(){
    	return $this->edad;
    } 

    public function SetEdad($edad) {
       $this->edad=$edad;
    }
//------------------------------------------------------------------------
    public function GetCelular(){
    	return $this->celular;
    } 

    public function SetCelular($celular) {
       $this->celular=$celular;
    }
//----------------------------------------------------------------------------
    public function GetFechana(){
    	return $this->fechana;
    } 

    public function SetFechana($fechana) {
       $this->fechana=$fechana;
    }
//------------------------------------------------------------------------------
    public function GetCarrera(){
    	return $this->carrera;
    } 

    public function SetCarrera($carrera) {
       $this->carrera=$carrera;
    }
//------------------------------------------------------------------------------
    public function GetArchivo(){
    	return $this->archivo;
    } 

    public function SetArchivo($archivo) {
       $this->archivo=$archivo;
    }
//----------------------------------------------------------------------
	public function __construct($email,$clave,$tipo,$nombre,$apellido,$edad,$celular,$fechana,$carrera,$archivo){
		$this->SetEmail($email);
		$this->SetClave($clave);
		$this->SetTipo($tipo);
		$this->SetNombre($nombre);
		$this->SetApellido($apellido);
		$this->SetEdad($edad);
		$this->SetCelular($celular);
		$this->SetFechana($fechana);
		$this->SetCarrera($carrera);
		$this->SetArchivo($archivo);
	}
	
	public function guardar(){
	$Conexion= new Conexion();
	$consulta=$Conexion->prepare('INSERT INTO ' .self::TABLA. ' (email,clave,tipo,nombre,apellido,edad,telefono,fechanac,carrera_estu,cv) VALUES (:email,:clave,:tipo,:nombre,:apellido,:edad,:celular,:fechana,:carrera,:archivo)');
	$consulta->bindParam(':email',$this->GetEmail());
	$consulta->bindParam(':clave',$this->GetClave());
	$consulta->bindParam(':tipo',$this->GetTipo());
	$consulta->bindParam(':nombre',$this->GetNombre());
	$consulta->bindParam(':apellido',$this->GetApellido());
	$consulta->bindParam(':edad',$this->GetEdad());
	$consulta->bindParam(':celular',$this->GetCelular());
	$consulta->bindParam(':fechana',$this->GetFechana());
	$consulta->bindParam(':carrera',$this->GetCarrera());
	$consulta->bindParam(':archivo',$this->GetArchivo());
	$consulta->execute();
	$Conexion=null;
	}
	
	/*public function BuscarId($id)
	{
		$Conexion=new Conexion();
		$Consulta=$Conexion->prepare('SELECT nombre,apellidos,edad,correo,usuarios,clave from '.self::TABLA.' WHERE id=:id');
		$Consulta->bindParam(':id',$id);
		$Consulta->execute();
		$Registro=$Consulta->fetch();
			if($Registro)
			{
				return new self($id,$Registro['nombre'],$Registro['apellidos'],$Registro['edad'],$Registro['correo'],$Registro['usuarios'],$Registro['clave']);
			}else
			{
				return false;
			}
	}
	
	public function RecuperarTodo()
	{
		$Conexion=new Conexion();
		$Consulta=$Conexion->prepare('SELECT nombre,apellidos,edad,correo,usuarios,clave from '.self::TABLA.' ORDER BY id');
		$Consulta->execute();
		$Registro=$Consulta->fetchAll();
		return $Registro;
		
	}*/
	
}





?>

			
