<?php

	if ( !isset($_SESSION)) {
		session_start();
	}

	require_once ("./recursos/cabecera.php");
	require_once ('./recursos/menu.php');
?>	

<div class="container">

	<div class="row">

		<div class="col-md-2">
		</div>
		<div class="col-md-6">

			<h4 class="text-info">Agregar Nuevo Contacto</h4>
<?php
			if (!empty($_SESSION['app_error']) OR !empty($_SESSION['app_mensaje'])) {
?>
				<div class="alert alert-<?=(!empty($_SESSION['app_error'])?'danger':(!empty($_SESSION['app_mensaje'])?'success':''))?>">
					<p>
						<?php
							echo (!empty($_SESSION['app_error'])?$_SESSION['app_error']:(!empty($_SESSION['app_mensaje'])?$_SESSION['app_mensaje']:''));
							$_SESSION['app_error'] = "";
							$_SESSION['app_mensaje'] = "";
						?></p>
				</div>
<?php
			}
?>

			<form id="form-nuevo" name="form-nuevo" class="form-horizontal" role="form" action='contacto_guarda.php' method="post" >
				<div class="form-group">
					<label for="txt-paterno" class="col-md-3 control-label">Apellido Paterno:</label>
					<div class="col-md-5">
						<input type="text" class="form-control"  name="txt-paterno" placeholder="Apellido Paterno" maxlength="30">
					</div>
				</div>

				<div class="form-group">
					<div class="col-md-offset-3 col-sm-5">
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