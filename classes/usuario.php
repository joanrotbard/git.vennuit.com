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

    public function registrarUsuario($usuario) 
    {
        $sql="INSERT INTO Cliente(Nombre,Apellido,Calle,Numero,Departamento,CodigoPostal,Mail,ProvinciaID,LocalidadID,Telefono,Celular,Contraseña,RecibeMail,Dni) Values ('".$usuario->nombre."','".$usuario->apellido."','".$usuario->calle."',".$usuario->numero.",'".$usuario->departamento."',".$usuario->codigopostal.",'".$usuario->mailusuario."',".$usuario->provinciaid.",".$usuario->localidadid.",'".$usuario->telefono."','".$usuario->celular."','".$usuario->contraseña."',".$usuario->recibemail.",".$usuario->dni.")";
		$resul = mysql_query($sql);
		mysql_close($connection);  
		/*$sql="INSERT INTO Cliente(Nombre,Apellido,Calle,Numero,Departamento,CodigoPostal,Mail,ProvinciaID,LocalidadID,Telefono,Celular,Contraseña,RecibeMail,Dni) Values ('asfaf','fasfsa','14241',414,'1414',141241,'fasfa',3,282,'42142','4124124','ffas',1,12414);";
		$resul = mysql_query($sql);*/
		var_dump($resul);die();
    }
}
?>