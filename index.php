<?php
	if ( !isset($_SESSION)) {
		session_start();
	}
	require_once ("./recursos/cabecera.php");
	require_once ('./recursos/menu.php');
?>	

<div class="container">

	<div class="row">
		<div class="col-md-12">

			<div class="alert alert-success">
				<h4>Inicio</h4>	
			</div>
			
		</div>
	</div>

</div>

<?php
	require_once ("./recursos/pie.php");
?>	