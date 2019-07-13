<?php
	
	$usuario = "jpatino";
	$password = "patino.123";
	$servidor = "192.168.12.248";
	$basededatos = "crm";
	
	// creación de la conexión a la base de datos con mysql_connect()
	$conexion = mysqli_connect( $servidor, $usuario, $password ) or die ("No se ha podido conectar al servidor de Base de datos");
	
	// Selección del a base de datos a utilizar
	$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
	// establecer y realizar consulta. guardamos en variable.
	$consulta="SELECT * FROM app_users WHERE username='$usuario' AND password='$clave'";

$resultado = mysqli_query($con, $consulta);

$filas=mysqli_num_rows($resultado);

if ($filas>0) {
	 
    header("location:home.php");
}
else {

header("location:login.php");

}

mysqli_free_result($resultado);
mysqli_close($con);
	





?>