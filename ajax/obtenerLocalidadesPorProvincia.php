<?

	include('../classes/localidad.php');
	$provinciaID = $_POST['provinciaID'];
	$localidades = Localidad::obtenerLocalidadPorProvincia($provinciaID);
	echo json_encode($localidades);
?>