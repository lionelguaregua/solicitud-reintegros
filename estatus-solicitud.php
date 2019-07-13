<?php 
ini_set('session.use_only_cookies', 1); 
ini_set("session.cookie_lifetime","3600");
ini_set("session.gc_maxlifetime","3600");
session_start();
$var = $_SESSION['userlog'];  

if($var != NULL){
   session_regenerate_id(true); 
} else{
   header("location:login.php");
}
include 'general/head.php';
include 'general/nav.php';
include 'conexion2.php';


$codigo2 = $_SESSION['nroservicio'];
$voucher2 = $_SESSION['vuser'];
$documento2 = $_SESSION['duser'];


?>

<style type="text/css">
	.jumbotron{
		background-color: #ffffff;
background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='119' height='119' viewBox='0 0 200 200'%3E%3Cpolygon fill='%23DCEFFA' points='100 0 0 100 100 100 100 200 200 100 200 0'/%3E%3C/svg%3E");
background-size: cover;
	}

</style>


<div class="container" style="padding-top: 50px;">


    <header class="jumbotron my-4">
      <h1 class="display-3">Mis solicitudes</h1>
      <p class="lead">Puedes verificar estatus de tus solicitudes en esta sección, cada vez que tu solicitud cambie de estatus, recibirás un email con la notificación correspondiente
      </p>
      
    </header>
	<body>

<table class="table table-striped table-hover">
				<tr>
                    <th><p>No</p></th>
					<th><p>Nombre</p></th>
					<th><p>Documento</p></th>
					<th><p>Nro. Servicio</p></th>
					<th><p>Monto solicitado</p></th>
					<th><p>Fecha de solicitud</p></th>
                    
                    <th><p>Voucher</p></th>
                    <th><p>Estatus</p></th>
					<th><p>Estado</p></th>
				</tr>
				<?php
				
					$sql = mysqli_query($mysqli, "SELECT * FROM reintegros WHERE voucher = '$voucher2' AND documento LIKE  '%$documento2%' ORDER BY id ASC");
				
				if(mysqli_num_rows($sql) == 0){
					echo '<tr><td colspan="8">No ha realizado ninguna solicitud de reintegro.</td></tr>';
				}else{
					$no = 1;
					while($row = mysqli_fetch_assoc($sql)){
						echo '
						<tr>
							<td>'.$no.'</td>
                            <td>'.$row['nombre_pax'].'</td>
                            <td>'.$row['documento'].'</td>
                            <td>'.$row['servicio'].'</td>
                            <td>'.$row['monto_solicitado'].'</td>
                            <td>'.$row['fecha_actual'].'</td>
							
                            <td>'.$row['voucher'].'</td>
                            <td>';
							if($row['estatus_solicitud'] == '1'){
								echo '<span class="badge badge-primary">Enviado</span>';
							}
                            else if ($row['estatus_solicitud'] == '2' ){
								echo '<span class="badge badge-success">Recibido</span>';
							}
                            else if ($row['estatus_solicitud'] == '3' ){
								echo '<span class="badge badge-info">En analisis</span>';
							} 
							else if ($row['estatus_solicitud'] == '4' ){
								echo '<span class="badge badge-success">Aprobado</span>';
							} 
							else if ($row['estatus_solicitud'] == '5' ){
								echo '<span class="badge badge-danger">Negado</span>';
							} 
							else if ($row['estatus_solicitud'] == '6' ){
								echo '<span class="badge badge-warning">Aprobado parcial</span>';
							}
							else if ($row['estatus_solicitud'] == '7' ) {
								echo '<span class="badge badge-warning">Documentación faltante</span>';
							}
						    
						echo '</td><td>';
						if ($row['estado'] == 1) {
							echo '<span class="badge badge-success">Abierto</span>';
						}elseif ($row['estado'] == 2) {
							echo '<span class="badge badge-danger">Cerrado</span>';
						}
						echo "</td></tr>";
						
						$no++;
					}
				}
				?>
			</table>

			
                </div>

			