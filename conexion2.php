<?php
	$usuario = "jpatino";
	$password = "qsa142536";
	$servidor = "localhost";
	$basededatos = "reintegros";
	
	
	$mysqli = mysqli_connect( $servidor, $usuario, $password ) or die ("No se ha podido conectar al servidor de Base de datos");
	
	$db = mysqli_select_db( $mysqli, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
	?>