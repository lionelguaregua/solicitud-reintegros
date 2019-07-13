<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

include 'ingreso.php';
include 'conexion2.php';
include 'general/head.php';


require('phpMailer/Exception.php');
require('phpMailer/OAuth.php');
require('phpMailer/PHPMailer.php');
require('phpMailer/SMTP.php');


try {
	
if (isset($_POST['envio'])) {
	

	 $coverage =  $_SESSION['cobertura_form'];
     $codigo = $_SESSION['nroservicio']; 
	 $nombre1 = $_SESSION['nuser'];  //*
	 $documento2 = $_SESSION['duser']; //*
	 $cliente3 = $_SESSION['cuser']; // *
	 $voucher4 = $_SESSION['vuser'];
	 $cobertura5 = $_SESSION['coberturauser'];
	 $fsolicitud6 = $_SESSION['fsuser'];
	 $case = $_SESSION['case']; // *
	 $monto = $_POST['monto'];
	 $paisinc =  $_POST['pais_inc'] ;
	 $direccion =  $_POST['direccion'];
	 if ($_POST['fechaocurrencia'] != '') {
	 	$focurrencia = $_POST['fechaocurrencia'];
	 }else{
	 	$focurrencia = '0000-00-00';
	 }
	 $motiv = $_POST['motivo'];
     $email = $_POST['correo'];
     $aero = $_POST['aerolinea'];
     $pir =$_POST['pir'];
     $mon =$_POST['moneda'];
     $nacionalidad = $_POST['nacionalidadpax'];
     $residencia = $_POST['p-residencia'];

     $_SESSION['correopax'] = $email ;

     //variables para verificar los tipos de archvios subidos
     $validador1 = 'true';
     $validador2 = 'true';
     $validador3 = 'true';
     $validador4 = 'true';
  

if ($email == '') {
	
	exit(header('location:solicitud.php?field=true'));

}

if ($_FILES['archivos1']['size'] > 0) {
 $total_files = count($_FILES['archivos1']['name']);

  for($key = 0; $key < $total_files; $key++) {

// Obtengo extensiones de archivos
$ext = strtolower(pathinfo($_FILES["archivos1"]["name"][$key], PATHINFO_EXTENSION));
        
 // Verifico las extensiones
if( in_array( $ext, array( 'png', 'jpg', 'gif', 'pdf', 'jpeg', ''))) {

$validador1;

} else{
	
$validador1 = 'false';
	
}
}

if ($validador1 == 'false') {
	exit(header('location:solicitud.php?filesupload=error'));
}else{
	
//Como el elemento es un arreglo utilizamos foreach para extraer todos los valores
foreach($_FILES["archivos1"]['tmp_name'] as $key => $tmp_name)
	{
		//Validamos que el archivo exista
    	if($_FILES["archivos1"]["name"][$key]) {
		$filename = $_FILES["archivos1"]["name"][$key]; //Obtenemos el nombre original del archivo
		$source = $_FILES["archivos1"]["tmp_name"][$key]; //Obtenemos un nombre temporal del archivo
			
		$directorio =  '/var/www/html/dashboard-laravel/storage/app/public/'.$codigo;  //Declaramos un  variable con la ruta donde guardaremos los archivos
			
			//Validamos si la ruta de destino existe, en caso de no existir la creamos
		if(!file_exists($directorio)){
				mkdir($directorio, 0755) or die("No se puede crear el directorio de extracci&oacute;n");	
		}
			
			$dir=opendir($directorio); //Abrimos el directorio de destino
		$target_path = $directorio.'/'.$filename; //Indicamos la ruta de destino, así como el nombre del archivo
			
			//Movemos y validamos que el archivo se haya cargado correctamente
			//El primer campo es el origen y el segundo el destino
		if(move_uploaded_file($source, $target_path)) {	
				echo " ";
				} else {	
				echo " ";
			}
			
		}
	}
}

}





if ($_FILES['archivos2']['size'] > 0) {

 $total_files = count($_FILES['archivos2']['name']);

  for($key = 0; $key < $total_files; $key++) {

// Obtengo extensiones de archivos
$ext = strtolower(pathinfo($_FILES["archivos2"]["name"][$key], PATHINFO_EXTENSION));
        
 // Verifico las extensiones
if( in_array( $ext, array( 'png', 'jpg', 'gif', 'pdf', 'jpeg', ''))) {

$validador2;

} else{
	
$validador2 = 'false';
	
}
}

if ($validador2 == 'false') {
	exit(header('location:solicitud.php?filesupload=error'));
}else{
	foreach($_FILES["archivos2"]['tmp_name'] as $key => $tmp_name)
	{
		//Validamos que el archivo exista
    	if($_FILES["archivos2"]["name"][$key]) {
		$filename = $_FILES["archivos2"]["name"][$key]; //Obtenemos el nombre original del archivo
		$source = $_FILES["archivos2"]["tmp_name"][$key]; //Obtenemos un nombre temporal del archivo
			
		$directorio =   '/var/www/html/dashboard-laravel/storage/app/public/'.$codigo;  //Declaramos un  variable con la ruta donde guardaremos los archivos
			
			//Validamos si la ruta de destino existe, en caso de no existir la creamos
		if(!file_exists($directorio)){
				mkdir($directorio, 0755) or die("No se puede crear el directorio de extracci&oacute;n");	
		}
			
			$dir=opendir($directorio); //Abrimos el directorio de destino
		$target_path = $directorio.'/'.$filename; //Indicamos la ruta de destino, así como el nombre del archivo
			
			//Movemos y validamos que el archivo se haya cargado correctamente
			//El primer campo es el origen y el segundo el destino
		if(move_uploaded_file($source, $target_path)) {	
				echo " ";
				} else {	
				echo " ";
			}
			
		}
	}
}

}


if ($_FILES['archivos3']['size'] > 0) {

$total_files = count($_FILES['archivos3']['name']);

  for($key = 0; $key < $total_files; $key++) {

// Obtengo extensiones de archivos
$ext = strtolower(pathinfo($_FILES["archivos3"]["name"][$key], PATHINFO_EXTENSION));
        
 // Verifico las extensiones
if( in_array( $ext, array( 'png', 'jpg', 'gif', 'pdf', 'jpeg', ''))) {

$validador3;

} else{
	
$validador3 = 'false';
	
}
}

if ($validador3 == 'false') {
	exit(header('location:solicitud.php?filesupload=error'));
}else{
	foreach($_FILES["archivos3"]['tmp_name'] as $key => $tmp_name)
	{
		//Validamos que el archivo exista
    	if($_FILES["archivos3"]["name"][$key]) {
		$filename = $_FILES["archivos3"]["name"][$key]; //Obtenemos el nombre original del archivo
		$source = $_FILES["archivos3"]["tmp_name"][$key]; //Obtenemos un nombre temporal del archivo
			
		$directorio =  '/var/www/html/dashboard-laravel/storage/app/public/'.$codigo;  //Declaramos un  variable con la ruta donde guardaremos los archivos
			
			//Validamos si la ruta de destino existe, en caso de no existir la creamos
		if(!file_exists($directorio)){
				mkdir($directorio, 0755) or die("No se puede crear el directorio de extracci&oacute;n");	
		}
			
			$dir=opendir($directorio); //Abrimos el directorio de destino
		$target_path = $directorio.'/'.$filename; //Indicamos la ruta de destino, así como el nombre del archivo
			
			//Movemos y validamos que el archivo se haya cargado correctamente
			//El primer campo es el origen y el segundo el destino
		if(move_uploaded_file($source, $target_path)) {	
				echo " ";
				} else {	
				echo " ";
			}
		}
	}

}

}



if ($_FILES['archivos4']['size'] > 0) {
	
	
$total_files = count($_FILES['archivos4']['name']);

  for($key = 0; $key < $total_files; $key++) {

// Obtengo extensiones de archivos
$ext = strtolower(pathinfo($_FILES["archivos4"]["name"][$key], PATHINFO_EXTENSION));
        
 // Verifico las extensiones
if( in_array( $ext, array( 'png', 'jpg', 'gif', 'pdf', 'jpeg', ''))) {

$validador4;

} else{
	
$validador4 = 'false';
	
}
}

if ($validador4 == 'false') {
	exit(header('location:solicitud.php?filesupload=error'));
}else{
	foreach($_FILES["archivos4"]['tmp_name'] as $key => $tmp_name)
	{
		//Validamos que el archivo exista
    	if($_FILES["archivos4"]["name"][$key]) {
		$filename = $_FILES["archivos4"]["name"][$key]; //Obtenemos el nombre original del archivo
		$source = $_FILES["archivos4"]["tmp_name"][$key]; //Obtenemos un nombre temporal del archivo
			
		$directorio =  '/var/www/html/dashboard-laravel/storage/app/public/'.$codigo;  //Declaramos un  variable con la ruta donde guardaremos los archivos
			
			//Validamos si la ruta de destino existe, en caso de no existir la creamos
		if(!file_exists($directorio)){
				mkdir($directorio, 0755) or die("No se puede crear el directorio de extracci&oacute;n");	
		}
			
			$dir=opendir($directorio); //Abrimos el directorio de destino
		$target_path = $directorio.'/'.$filename; //Indicamos la ruta de destino, así como el nombre del archivo
			
			//Movemos y validamos que el archivo se haya cargado correctamente
			//El primer campo es el origen y el segundo el destino
		if(move_uploaded_file($source, $target_path)) {	
				echo " ";
				} else {	
				echo " ";
			}
		}
	}
}

}






$definido='No definido';
$route = 'administrativos/'.$codigo;
	 
	
		$cek = mysqli_query($mysqli, "SELECT * FROM reintegros WHERE voucher = 0 ");



				if(mysqli_num_rows($cek) == 0){
						$insert = mysqli_query($mysqli, "INSERT INTO reintegros(nombre_pax, documento, cliente, estatus_solicitud, monto_solicitado, voucher, servicio, documento_ruta,enviado, pais_incidencia, direccion_ocurrencia, fecha_ocurrencia, observaciones, email, aerolinea, pir, nacionalidad, pais_res, moneda, cobertura_1, caso, estado, moneda_aprobado, medio_pago, ruta_admin)
															VALUES('$nombre1','$documento2', '$cliente3',  2, '$monto', '$voucher4', '$codigo',
															'$directorio',1,'$paisinc', '$direccion','$focurrencia', 
															'$motiv', '$email', '$aero', '$pir', '$nacionalidad', '$residencia', '$mon', '$coverage', '$case', 1, 
															'$definido','$definido', '$route')") or die(mysqli_error($mysqli));

						$insert2 = mysqli_query($mysqli, "INSERT INTO evento(id_mod,tipo_modificacion) VALUES($codigo, 1)") or die(mysqli_error($mysqli));
		
 $mail = new PHPMailer(true);  

 $mail->SMTPDebug = 0; 
 $mail->IsSMTP();
 $mail->SMTPAuth = true;
 $mail->SMTPSecure = 'tls';
 $mail->Host = 'smtp.gmail.com';
 $mail->Port = 587;// TCP port to connect to
 $mail->CharSet = 'UTF-8';
$mail->Username ='atencion.cliente@quanticoservicios.com'; //Email para enviar
$mail->Password = 'qsa362514*'; //Su password
//Agregar destinatario
$mail->setFrom('atencion.cliente@quanticoservicios.com', 'Quantico Servicios de Asistencia');
$mail->AddAddress($email,'Estimado Usuario');//A quien mandar email 
$mail->Mailer = "smtp"; 


$mail->Subject = 'Quantico Servicios de Asistencia | Su solicitud de reintegro ha sido enviada!';


$mail->Body = "


<div style='margin-left: 20px; text-align: justify;'>

<h3>Solicitud de reintegro enviada exitosamente.</h3> 

<p>Hemos recibido su solicitud de reintegro.</p>

 
<p>1. Una vez recibidos los documentos, Quántico tiene hasta cinco (5) días continuos para solicitar cualquier documento faltante que no haya sido entregado por el Titular.</p>
 
<p>2. Con todos los documentos necesarios en mano, Quántico procederá durante los siguientes cinco (5) días hábiles a analizar el caso y emitir la carta de  probación o negación dirigida al pasajero, la cuál será enviada al mismo por el departamento de Reintegros.</p>
 
<p>3. Siendo procedente el reembolso, Se procederá a efectuar el pago en 30 días hábiles, posteriores a la fecha de recepción de los datos completos vía escrita para la realización de la transferencia.</p>

<p><b>Puede verificar el estatus de su solicitud a través de nuestra plataforma de solicitud de reintegros, en la sección de estatus</b></p>
<br>
<br>
<br>
<p>Saludos,</p>
<img src='http://quanticoservicios.net/webroot/img/quantico.png'>
<p style='font-size: 17px;'>Departamento de reintegros</p>
<small>Quantico Servicios de Asistencia<br>
	+(507) 831 5098 <br> 
	Edificio Magna Corp, Piso No.6, Oficina 622, Calle 51 y Manual María Icaza, Bella Vista, Ciudad de Panamá.. <br>
	www.quanticoservicios.net/ <br> 
Recuerde tener en cuenta:<br>
-Horario hábil (Lunes a Viernes desde las 8:00 am hasta las 5:00 pm)<br>
-Para activar el servicio debe haberse comunicado con la central de emergencias dentro de las 24 hs de sucedido el hecho.<br>
-Presentar la documentación por original dentro de los 30 días a partir del fin de vigencia del voucher.<br>

No me imprimas si no es necesario. Protejamos el medio ambiente.</small>

</div>


";

$mail->IsHTML(true);
			

			if($insert && $mail->send()){
							?>
							<script> 
<!--
window.location.replace('add-exitoso.php'); 
//-->
</script>

							<?php
						}else{
							header('location: lo-sentimos.php');
						};

						$mail = new PHPMailer(true);  

$mail->SMTPDebug = 0; 
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;// TCP port to connect to
$mail->CharSet = 'UTF-8';
$mail->Username ='atencion.cliente@quanticoservicios.com'; //Email para enviar
$mail->Password = 'qsa362514*'; //Su password
//Agregar destinatario
$mail->setFrom('atencion.cliente@quanticoservicios.com', 'Quantico Servicios de Asistencia');
$mail->AddAddress('reembolso@quanticoservicios.com','Nueva solicitud');//A quien mandar email 
$mail->Mailer = "smtp"; 


$mail->Subject = 'Nueva solicitud de reintegro vía Web - '.$nombre1.' - '.$nroservicio.'';


$mail->Body = "


<h2 style='text-align:center;'>Nueva solicitud de reintegro via web</h2><br>
<p>El pasajero: ".$nombre1." asociado al voucher: ".$voucher4.", DNI: ".$documento2." há realizado una solicitud de reintegro via Web. </p>


";

$mail->IsHTML(true);
			

			if($insert && $mail->send()){
							?>
							<script> 
<!--
window.location.replace('add-exitoso.php'); 
//-->
</script>

							<?php
						}else{
							header('location: lo-sentimos.php');
						};



				}else{
					header('location:lo-sentimos.php');
			};

}else{
	?>
							<script> 
<!--
window.location.replace('solicitud.php'); 
//-->
</script>

							<?php
}



} catch (Exception $e) {
	echo $e;
}





			?>				
