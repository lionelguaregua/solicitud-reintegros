<?php include("head.php")?>
<section class="completa"> 
<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Intranet QSA</h5>
            <form class="form-signin" method="POST" action="ingreso.php">
              <div class="form-label-group">
                <input type="text" id="inputEmail" class="form-control" placeholder="Email address" name="usuario" pattern="[A-Za-z0-9_-]{1,15}" required autofocus>
                <label for="inputEmail">Usuario: </label>
              </div>

              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="clave" pattern="[A-Za-z0-9_-]{1,15}" required>
                <label for="inputPassword">Contraseña: </label>
              </div>

              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Recordar contraseña</label>
              </div>
              <?php
       if(isset($_GET["fail"]) && $_GET["fail"] == 'true')
       {
          echo  "<script type=\"text/javascript\">alert(\"Usuario o contraseña invalidos\");</script>";
       }
     ?>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Ingresar</button>
              <hr class="my-4">
              
            </form>

          </div>

</div>
         <br>
            <br>
            <br>
            <br>
            <br>
             <br>
            <br>
            
      </div>
    </div>
  </div>
  </section>