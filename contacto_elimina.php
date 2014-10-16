<?php
	if ( !isset($_SESSION)) {
		session_start();
	}

	require("recursos/util.php");

	$sConsulta	=	"DELETE FROM contacto "
				.	"WHERE contacto_id = {$_GET['id']}";
	//echo $sConsulta;

	if ( $qContacto = _mysqli($sConsulta)) {

		if ($qContacto) {
			$_SESSION['app_mensaje'] = "Contacto eliminado correctamente!...";
			header("Location: listado.php");
		}else{
			$_SESSION['app_error'] = "No se pudo eliminar contacto!...";
			header("Location: contacto.php");
		}

	} else {

	}
	
	
?>