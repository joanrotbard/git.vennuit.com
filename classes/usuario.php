<?php

include_once ("dbconfig.php");

class Usuario{
	
    public $id;
    public $nombre; 
    public $apellido;
    public $calle;
	public $numero;
	public $departamento;
	public $codigopostal;
	public $mailusuario;
	public $provinciaid;
	public $localidadid;
	public $telefono;
	public $celular;
	public $contraseña;
	public $recibemail;
	public $dni;
	
 
    public function __construct($id="") 
    {
        $this->id=$id;
    }
	public static function existeMail($mail){
			
		$sql="SELECT COUNT(*) as Cantidad FROM Cliente WHERE Mail = '".$mail."'";
		$result = mysql_fetch_assoc(mysql_query($sql));
		if(intval($result['Cantidad']) > 0)
			return true;
		else
			return false;
	}
	public static function tryLogin($mail,$password){
		
		$password = hash("sha512", $password);	
		$sql="SELECT COUNT(*) as Cantidad FROM Cliente WHERE Mail = '".$mail."' AND Password = '".$password."'";
		$result = mysql_fetch_assoc(mysql_query($sql));
		if(intval($result['Cantidad']) > 0)
			return true;
		else
			return false;
	}
    public function registrarUsuario($usuario) 
    {
    	$usuario->contraseña = hash("sha512", $usuario->contraseña);
		if($usuario->recibemail == true){
			$usuario->recibemail = 1;
		}else{
			$usuario->recibemail = 0;
		}
        $sql="INSERT INTO Cliente(Nombre,Apellido,Calle,Numero,Departamento,CodigoPostal,Mail,ProvinciaID,LocalidadID,Telefono,Celular,Password,RecibeMail,Dni) Values ('".$usuario->nombre."','".$usuario->apellido."','".$usuario->calle."',".$usuario->numero.",'".$usuario->departamento."',".$usuario->codigopostal.",'".$usuario->mailusuario."',".$usuario->provinciaid.",".$usuario->localidadid.",'".$usuario->telefono."','".$usuario->celular."','".$usuario->contraseña."',".$usuario->recibemail.",".$usuario->dni.")";
		$resul = mysql_query($sql);
		
    }
}
?>