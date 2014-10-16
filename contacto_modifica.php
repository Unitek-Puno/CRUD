<?php

	if ( !isset($_SESSION)) {
		session_start();
	}

	require_once ("./recursos/cabecera.php");
	require_once ('./recursos/menu.php');
	require_once ("./recursos/util.php");

	$sConsulta	=	"SELECT c.* "
				.	"FROM contacto c "
				.	"WHERE c.contacto_id = {$_GET['id']}";
	$bResultado = FALSE;
	if ( $qContacto = _mysqli($sConsulta)) {
		if ($aContacto = $qContacto->fetch_assoc()) {
			$bResultado = TRUE;
		}
	}
?>	

<div class="container">

	<div class="row">

		<div class="col-md-2">
		</div>
		<div class="col-md-6">

			<h4 class="text-info">Agregar Nuevo Contacto</h4>
			<form id="form-nuevo" name="form-nuevo" class="form-horizontal" role="form" action='contacto_modifica_guarda.php' method="post" >
				<input type="text" class="form-control"  name="txt-id" value="<?=$aContacto['contacto_id']?>">
				<div class="form-group">
					<label for="txt-paterno" class="col-md-4 control-label">Apellido Paterno:</label>
					<div class="col-md-4">
						<input type="text" class="form-control"  name="txt-paterno" placeholder="Apellido Paterno" maxlength="30" value="<?=$aContacto['paterno']?>">
					</div>
				</div>
				<div class="form-group">
					<label for="txt-materno" class="col-md-4 control-label">Apellido Materno:</label>
					<div class="col-md-4">
						<input type="text" class="form-control"  name="txt-materno" placeholder="Apellido Materno" maxlength="30" value="<?=$aContacto['materno']?>">
					</div>
				</div>
				<div class="form-group">
					<label for="txt-paterno" class="col-md-4 control-label">Apellido Nombres:</label>
					<div class="col-md-4">
						<input type="text" class="form-control"  name="txt-nombres" placeholder="Apellido Nombres" maxlength="35" value="<?=$aContacto['nombres']?>">
					</div>
				</div>

				<div class="form-group">
					<div class="col-md-offset-4 col-sm-4">
						<button type="submit" class="btn btn-primary">Guardar</button> <a class="btn btn-danger" href="../">Cancelar</a>
					</div>
				</div>
			</form>		
		</div>

		<div class="col-md-2">
		</div>
		
	</div>		

</div>

<?php
	require_once ("./recursos/pie.php");
?>