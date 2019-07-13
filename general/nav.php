
<nav class="navbar navbar-expand-lg navbar-light  fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger"  style="color: #fff;" href="home.php">Reintegros: <?php 
if ( $_SESSION['cuser'] == 2) {
  echo "Plus Ultra";
}elseif ($_SESSION['cuser'] == 3) {
  echo "Assist Med";
}elseif ($_SESSION['cuser'] == 5) {
  echo "Interwelt";
}elseif ($_SESSION['cuser'] == 6 OR $_SESSION['cuser'] == 4) {
  echo "Pasaporte país";
}elseif ($_SESSION['cuser'] == 7) {
  echo "Card Club";
}elseif ($_SESSION['cuser'] == 8) {
  echo "M.C. Air";
}elseif ($_SESSION['cuser'] == 9) {
  echo "Mas Asistencia";
}elseif ($_SESSION['cuser'] == 11) {
  echo "La Venezolana de Seguros";
}elseif ($_SESSION['cuser'] == 14) {
  echo "Mas Asistencia";
}elseif ($_SESSION['cuser'] == 15) {
  echo "SmartMatic";
}elseif ($_SESSION['cuser'] == 16) {
  echo "Strada Travel";
}elseif ($_SESSION['cuser'] == 17) {
  echo "Interwelt";
}elseif ($_SESSION['cuser'] == 18) {
  echo "Interwelt";
}elseif ($_SESSION['cuser'] == 19) {
  echo "Excelencias";
}elseif ($_SESSION['cuser'] == 20) {
  echo "Interwelt";
}elseif ($_SESSION['cuser'] == 21) {
  echo "Booking assistance";
}elseif ($_SESSION['cuser'] == 23) {
  echo "Interwelt";
}elseif ($_SESSION['cuser'] == 24) {
  echo "Miviajeseguro.com";
}elseif ($_SESSION['cuser'] == 25) {
  echo "Segurosparaviajes.net";
}elseif ($_SESSION['cuser'] == 27) {
   echo "Estasporviajar.net";
}elseif ($_SESSION['cuser'] == 28) {
  echo "Passenger Assistance";
}elseif ($_SESSION['cuser'] == 29) {
  echo "Empresas Polar";
}elseif ($_SESSION['cuser'] == 30) {
  echo "Travi Assist";
}elseif ($_SESSION['cuser'] == 31) {
  echo "Tusegurodeviaje.net";
}elseif ($_SESSION['cuser'] == 32) {
  echo "Viajes Gaitan";
}elseif ($_SESSION['cuser'] == 34) {
  echo "Tranki Asistencia";
}elseif ($_SESSION['cuser'] == 35) {
  echo "Vega Corp";
}elseif ($_SESSION['cuser'] == 38) {
  echo "Interwelt";
}elseif ($_SESSION['cuser'] == 39) {
  echo "Interwelt";
}elseif ($_SESSION['cuser'] == 40) {
  echo "Interwelt";
}elseif ($_SESSION['cuser'] == 41) {
  echo "Interwelt";
}
elseif ($_SESSION['cuser'] == 42) {
 echo "Interwelt";
}elseif ($_SESSION['cuser'] == 43) {
  echo "Interwelt";
}  ?>

</a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger"  style="color: #fff;" href="home.php">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" style="color: #fff;" href="solicitud.php">Solicitud</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" style="color: #fff;" href="estatus-solicitud.php">Estatus</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" style="color: #fff;" href="logout.php">Salir</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>