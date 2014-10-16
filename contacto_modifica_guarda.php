<?php
	if ( !isset($_SESSION)) {
		session_start();
	}

	require("recursos/util.php");

	$sConsulta	=	"UPDATE contacto "
				.	"SET "
				.	"paterno = '{$_POST['txt-paterno']}', "
				.	"materno = '{$_POST['txt-materno']}', "
				.	"nombres = '{$_POST['txt-nombres']}' "
				.	"WHERE contacto_id = {$_POST['txt-id']}";
	//echo $sConsulta;

	if ( $qContacto = _mysqli($sConsulta)) {

		if ($qContacto) {
			$_SESSION['app_mensaje'] = "Los cambios se guardaron correctamente!...";
			header("Location: listado.php");
		}else{
			$_SESSION['app_error'] = "No se pudieron guardar los cambios!...";
			header("Location: contacto.php");
		}

	} else {

	}
	
	
?>