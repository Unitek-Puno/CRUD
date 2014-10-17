<?php

	if ( !isset($_SESSION)) {
		session_start();
	}

	require_once ("./recursos/cabecera.php");
	require_once ('./recursos/menu.php');
	require_once ("./recursos/util.php");

	$sConsulta	=	"SELECT c.* "
				.	"FROM contacto c "
				.	"ORDER BY c.paterno, c.materno, c.nombres";
	$bResultado = FALSE;
	if ( $qContacto = _mysqli($sConsulta)) {
		$bResultado = TRUE;
	}

?>	

<div class="container">

	<div class="row">

		<div class="col-md-8">
<?php
			if ($bResultado) {
?>
				<h4 class="text-info">Listado de Contactos</h4>
				<table class="table table-striped table-bordered table-hover table-condensed">
					<thead>
						<tr>
							<th>N°</th>
							<th>Paterno</th>
							<th>Materno</th>
							<th>Nombres</th>
						</tr>
					</thead>
					<tbody>
<?php
				$vCantidad = 1;
				while ( $aResultado = $qContacto->fetch_assoc() ) {
?>
					<tr>
						<td><?=$vCantidad?></td>
						<td><?=$aResultado['paterno']?></td>
						<td><?=$aResultado['materno']?></td>
						<td><?=$aResultado['nombres']?></td>
					</tr>
<?php
					$vCantidad++;
				}
?>
					</tbody>
				</table>

<?php
			} else {
?>
				<div class="alert alert-info">
					Aun no existen contactos registrados
				</div>
<?php
			}
?>


		</div>

		<div class="col-md-4">
		</div>
		
	</div>		

</div>

<?php
	require_once ("./recursos/pie.php");
?>