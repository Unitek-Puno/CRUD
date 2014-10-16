<?php

function _mysqli($pSQL)
{
	require_once("constante.php");
	$mysqli = new mysqli(DB_SERVIDOR, DB_USUARIO, DB_CLAVE, DB_BASEDATOS);
	$mysqli->set_charset("utf8");
	if ($mysqli->connect_errno) {
		echo "Fallo al contenctar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
		exit();
	}
	return $mysqli->query($pSQL);
}

function _mysqliCRUD($pSQL)
{
	require_once("constante.php");
	$mysqli = new mysqli(DB_SERVIDOR, DB_USUARIO, DB_CLAVE, DB_BASEDATOS);
	$mysqli->set_charset("utf8");
	if ($mysqli->connect_errno) {
	 echo "Fallo al contenctar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	 exit();
	}
	$tmp = $mysqli->query($pSQL);
	$_SESSION['insert_id'] = $mysqli->insert_id;
	return $tmp;
}



?>