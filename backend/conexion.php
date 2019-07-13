<?php
	
	$usuario = "jpatino";
	$password = "patino.123";
	$servidor = "192.168.12.248";
	$basededatos = "crm";
	
	
	$conexion = mysqli_connect( $servidor, $usuario, $password ) or die ("No se ha podido conectar al servidor de Base de datos");
	
	$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
	?>