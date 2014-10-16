<?

	include('../classes/usuario.php'); 
	$existe = Usuario::tryLogin($_POST['mailuser'],$_POST['password']);	
	echo json_encode($existe);
?>