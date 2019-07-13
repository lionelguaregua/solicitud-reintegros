<?php
	$usuario = "jpatino";
	$password = "patino.123";
	$servidor = "192.168.12.248";
	$basededatos = "crm";
	 

	
	$mysqli = mysqli_connect( $servidor, $usuario, $password ) or die();
	
	$db = mysqli_select_db( $mysqli, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
	?>