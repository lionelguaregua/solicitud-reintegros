<body>
<br>
<br>
<br>

<div class="container text-center">

  <h1 class="mt-5 text-black font-weight-light">Bienvenido a la solicitud de reembolsos en Línea</h1>

 
  <br>
  <p class="lead text-white-100"><b><?php echo $_SESSION['nuser']?>: Aquí podras gestionar tus reembolsos, ver el estatus del mismo y aclarar dudas con el departamento encargado</b></p>
 <?php
if ($_SESSION['cuser'] == 3) {

echo "<img src='webroot/img/assist-med.png' width='190' height='120'>"; 

}elseif ($_SESSION['cuser'] == 5) {

echo "<img src='webroot/img/interwelt-logo.png' width='190' height='120'>"; 

}elseif ($_SESSION['cuser'] == 6) {
  
  echo "<img src='webroot/img/logo.png' width='190'> "; 

}{
	
}
  ?>

</div>

<br>

<div class="container">
  <div class="row">
    <div class="col text-center">


      <button class="btn btn-success" onclick="location.href='solicitud.php'">Solicitar reembolso</button>

      <button class="btn btn-success" onclick="location.href='estatus-solicitud.php'">Estatus de solicitud</button>
    </div>
  </div>
</div>

</body>