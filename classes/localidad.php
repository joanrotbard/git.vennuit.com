<?php

include_once ("dbconfig.php");

class Localidad{
	
    public $id;
 
    public function __construct() //funcion que se autoejecuta cuando defines un objeto, le puedes poner argumentos de inicialización, por defecto todo es vacio
    {
    }

    public static function obtenerLocalidadPorProvincia($provinciaID) 
    {
        $sql="SELECT * FROM Localidad WHERE ProvinciaID = ".$provinciaID;
		$result = mysql_query($sql);
		
		while($row = mysql_fetch_assoc($result)){
			 $row["Nombre"] = utf8_encode($row["Nombre"]);
		     $localidades[] = $row;
		}
		return $localidades;
    }
}
?>