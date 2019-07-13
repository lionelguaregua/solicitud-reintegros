<?php 
session_start();
include 'general/head.php';
include 'general/nav.php';

?>
<style type="text/css">
  section {
  padding: 120px 0;
}
</style>

<section>
  <div class="container">
  <div class="row align-items-center my-5">
      <div class="col-lg-7 text-center">
        <img class="img-fluid rounded mb-4 mb-lg-0" src="https://www.gbs.pe/wp-content/uploads/2018/09/success-clip-art-png-5.png" alt="" width="400">
      </div>
      <!-- /.col-lg-8 -->
      <div class="col-lg-5">
        <h1 class="font-weight-light">Información enviada Exitosamente</h1>
        <p>Su solicitud de reintegro ha sido enviada con exito, lo invitamos a verificar su dirección de email: <?php echo $_SESSION['correopax']; ?> en donde se le explicarán los proximos pasos</p>
       
        <a class="btn btn-success" href="estatus-solicitud.php">Estatus de solicitud</a>
      </div>
      <!-- /.col-md-4 -->
    </div>
    </div>
</section>
  