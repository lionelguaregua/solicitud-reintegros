<?php
session_start();


if (isset($_POST['caso'], $_POST['serv'], $_POST['voucher'])) {

include('conexion.php');


$mysqli->set_charset('utf8');
$voucher = $mysqli->real_escape_string($_POST['voucher']);
$caso = $mysqli->real_escape_string($_POST['caso']);
$serv = $mysqli->real_escape_string($_POST['serv']);

$q1 = 'c0_.id';
$q2 = 'c0_.fecha_creacion';
$q3 = 'c0_.fecha_modificacion';
$q4 = 'c0_.preexistencia_solucion';
$q5 = 'c0_.diagnostico_tratamiento';
$q6 = 'c0_.direccion_actual_afiliado';
$q7 = 'c0_.telefono_actual_afiliado';
$q8 = 'c0_.descripcion';
$q9 = 'c0_.estado';
$q10 = 'c0_.ciudad';
$q11 = 'c0_.cliente_corporativo_id';
$q12 = 'c0_.afiliado_id';
$q13 = 'c0_.user_id';
$q14 = 'c0_.voucher_id';
$q15 = 'c0_.metodo_recepcion_caso_id';
$q16 = 'c0_.pais_id';
$q17 = 'c0_.preexistencia_id';
$q18 = 'c0_.idcasoidioma';



$w1 = 'c0_.voucher_id';
$w2 = 'v1_.id';
$w3 = 'v1_.numero';
$w4 = 'c0_.afiliado_id';
$w5 = 'a2_.id';
$w6 = 'a2_.identificacion_afiliado';
$w7 = 'a2_.nombre';


$consulta="
SELECT
	$q1 AS id0,
	$q2 AS fecha_creacion1,
	$q3 AS fecha_modificacion2,
	$q4 AS preexistencia_solucion3,
	$q5 AS diagnostico_tratamiento4,
	$q6 AS direccion_actual_afiliado5,
	$q7 AS telefono_actual_afiliado6,
	$q8 AS descripcion7,
    $q9 AS estado8,
	$q10 AS ciudad9,
	$q11 AS cliente_corporativo_id10,
	$q12 AS afiliado_id11,
	$q13 AS user_id12,
	$q14 AS voucher_id13,
	$q15 AS metodo_recepcion_caso_id14,
	$q16 AS pais_id15,
	$q17 AS preexistencia_id16,
	$q18 AS idcasoidioma17
FROM
	casos c0_
WHERE
	$w1 IN (
		SELECT
			$w2
		FROM
			vouchers v1_
		WHERE
			$w3 LIKE '$voucher'
	)
OR $w4 IN (
	SELECT
		$w5
	FROM
		afiliados a2_
	WHERE
		$w6 LIKE '$voucher'
	OR $w7 LIKE '$voucher'
)
OR $q1 = '$voucher'
ORDER BY
	$q1 DESC
LIMIT 1 

";

$resultado = mysqli_query($mysqli, $consulta);
$filas=mysqli_num_rows($resultado);
$fila = $resultado->fetch_row();




if ($filas>0) {

	 $dato = $fila[11];

	 $cliente = $fila[10];
	 $_SESSION['cuser'] = $cliente;
	 $_SESSION['vuser'] = $voucher;

}else{
	exit(header('location:login.php?fail=true'));
	//var_dump($resultado);
}


$t1 = 't0.id';
$t2 = 't0.identificacion_afiliado';
$t3 = 't0.nombre';
$t4 = 't0.telefono';
$t5 = 't0.email';
$t6 = 't0.fecha_de_nacimiento';
$t7 = 't0.genero';
$t8 = 't0.is_active';
$t9 = 't0.is_deleted';
$t10 = 't0.is_manually_added';
$t11 = 't0.nacionalidad';
$t12 = 't0.observaciones';
$t13 = 't0.cliente_id';
$t14 = 't0.upload_id';



$consulta1 = "
SELECT 
  $t1 AS id1, 
  $t2 AS identificacion_afiliado2, 
  $t3 AS nombre3, 
  $t4 AS telefono4, 
  $t5 AS email5, 
  $t6 AS fecha_de_nacimiento6, 
  $t7 AS genero7, 
  $t8 AS is_active8, 
  $t9 AS is_deleted9, 
  $t10 AS is_manually_added10, 
  $t11 AS nacionalidad11, 
  $t12 AS observaciones12, 
  $t13 AS cliente_id13, 
  $t14 AS upload_id14 
FROM 
  afiliados t0 
WHERE 
  $t1 = '$dato'
";


$resultado1 = mysqli_query($mysqli, $consulta1);
$filas1=mysqli_num_rows($resultado1);
$fila1 = $resultado1->fetch_row();


if ($filas1>0) {
	

	 $nombre = $fila1[2];
	 $_SESSION['nuser'] = $nombre;

	 $documento = $fila1[1];
	 $_SESSION['duser'] = $documento;
}
else {

exit(header('location:login.php?fail=true'));

}




$consulta2 = "
SELECT
*
FROM
caso_servicios
WHERE

	`tipo_servicio_id` = 4
AND
    `caso_servicios`.`id` = '$serv'
AND 
    `caso_id` = '$caso'
limit 1

";


$resultado2 = mysqli_query($mysqli, $consulta2);
$filas2=mysqli_num_rows($resultado2);
$fila2 = $resultado2->fetch_row();

if ($filas2>0) {
	

	  $servicio = $fila2[0];
	 $_SESSION['nroservicio'] = $servicio;

	 $case = $fila2[2];
	 $_SESSION['case'] = $case;
}
else {

exit(header('location:login.php?fail=true'));

}




if (($filas > 0) && ($filas1 > 0) && ($filas2 > 0) ) {
	session_start();
	$_SESSION['userlog'] = "si";
	session_regenerate_id(true); 
	header('location:home.php');
}





mysqli_free_result($resultado, $resultado1, $resultado2);
mysqli_close($mysqli);

}




?>