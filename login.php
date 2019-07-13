

<?php include("general/head.php")?>

<body>
  <!--Echo out errors here. See example-->
 
   <div class="container contenido-ingreso">

    <div class="row">
      <div class="col-md-6 texto">
        <h3>Bienvenido/a a Reintegros en Línea</h3>
            <p>Aquí podrás:</p>
            <ul>
              <li><i class="fas fa-check-circle" style="color: #4CD00E"></i> Realizar tus solicitudes de reintegro </li>
              <li><i class="fas fa-check-circle" style="color: #4CD00E"></i> Consultar estatus de tus solicitudes</li>
              <li><i class="fas fa-check-circle" style="color: #4CD00E"></i> Información sobre reintegros</li>
            </ul>
    </div>
    
          <div class="col-md-6">
              <?php
if(isset($_GET["fail"]) && $_GET["fail"] == 'true')
       {
          echo  "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
  <strong>Datos de acceso invalidos!</strong> Por favor verifique sus datos e intente nuevamente.
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>";
       }
     ?>
            <form method="POST" action="ingreso.php">
           
      <div class="mat-in">
        <input type="text" name="voucher" value="" required autocomplete="off"></input>
        <span class="bar"></span>
        <label>Voucher</label>
      </div>
      <div class="mat-in">
        <input type="text" name="caso" value="" required autocomplete="off"></input>
        <span class="bar"></span>
        <label>N° Caso</label>
      </div>
      <div class="mat-in">
        <input type="text" name="serv" value="" required autocomplete="off"></input>
        <span class="bar"></span>
        <label>N° Servicio</label>
      </div>
      <button type="submit" name="submit" id="login">Ingresar</button>
    </form>
            
        </div>
        </div>
          
       
      
    

  </body>
