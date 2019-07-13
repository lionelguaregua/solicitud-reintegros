<?php
session_start();
include('conexion.php');
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

//consulta de usuario

$consulta="SELECT * FROM usuarios WHERE nombre='$usuario' AND password='$clave'";

$resultado = mysqli_query($con, $consulta);

$filas=mysqli_num_rows($resultado);

if ($filas>0) {
	session_start();
	$_SESSION['user'] = "si";
	session_regenerate_id(true); 
header("location:index.php");
}
else {

header("location:login.php?fail=true");

}

mysqli_free_result($resultado);
mysqli_close($con);
?>