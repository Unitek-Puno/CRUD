<?php
	if ( !isset($_SESSION)) {
		session_start();
	}

	require("recursos/util.php");

	$sConsulta	=	"INSERT INTO contacto "
				.	"SET "
				.	"paterno = '{$_POST['txt-paterno']}'";

	if ( $qContacto = _mysqliCRUD($sConsulta)) {

		if ($qContacto) {
			$_SESSION['app_mensaje'] = "Contacto guardado correctamente!...";
			header("Location: contacto.php");
		}else{
			$_SESSION['app_error'] = "Contacto guardado correctamente!...";
			header("Location: contacto.php");
		}

	} else {

	}

	
?>