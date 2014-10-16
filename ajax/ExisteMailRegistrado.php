<?

	include('../classes/usuario.php');
	$existe = Usuario::existeMail($_POST['mail']);	
	echo json_encode($existe);
?>