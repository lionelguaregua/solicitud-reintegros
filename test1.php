
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Seleccionar opción para mostrar un formulario u otro</title>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/externo.js"></script>
</head>

<body>

	Estado actual: 
    <select id="status" name="status" onChange="mostrar(this.value);">
        <option value="estudiante">Estudiante</option>
        <option value="trabajador">Trabajador</option>
        <option value="autonomo">Autónomo</option>
        <option value="paro">En el paro</option>
     </select>
</form>

<div id="estudiante" class="element" style="display: none;">
	<h2>Si eres estudiante...</h2>
    <form action="index.php" method="post">
    	<p>Nombre:<br/>
    	<input type="text" name="nombre" /></p>
        <p>Centro:<br/>
    	<input type="text" name="centro" /></p>
        <input type="submit" name="send" value="Enviar" />
    </form>
</div>

<div id="trabajador" class="element" style="display: none;">
	<h2>Si eres trabajador...</h2>
    <form action="index.php" method="post">
    	<p>Nombre:<br/>
    	<input type="text" name="nombre" /></p>
        <p>Empresa:<br/>
    	<input type="text" name="centro" /></p>
        <input type="submit" name="send" value="Enviar" />
    </form>
</div>

<div id="autonomo" class="element" style="display: none;">
	<h2>Si eres autónomo...</h2>
    <form action="index.php" method="post">
    	<p>Nombre:<br/>
    	<input type="text" name="nombre" /></p>
        <p>Empresa:<br/>
    	<input type="text" name="empresa" /></p>
         <p>Ingresos anuales:<br/>
    	<input type="text" name="ingresos" /></p>
        <input type="submit" name="send" value="Enviar" />
    </form>
</div>

<div id="paro" class="element" style="display: none;">
	<h2>Si estás en el paro...</h2>
	 <form action="index.php" method="post">
    	<p<Nombre:<br/>
    	<input type="text" name="nombre" /></p>
       <p> Última empresa:<br/>
    	<input type="text" name="empresa" /></p>
         <p>Tiempo en paro:<br/>
    	<input type="text" name="tiempo" /></p>
        <input type="submit" name="send" value="Enviar" />
    </form>
</div>

</body>
</html>


<section class="completa"> 
  <div class="loader"></div>
<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Reembolsos</h5>
            <form class="form-signin" id="login-form" name="login-form" method="POST" action="ingreso.php">
              <div class="form-label-group">

                <input type="text" id="fvoucher" class="form-control" placeholder="Numero de voucher" name="voucher" pattern="[A-Za-z0-9_-]{1,15}" required autofocus>
                
              </div>

              <div class="form-label-group">

                <input type="text" id="fdoc" class="form-control" placeholder="Numero de documento" name="doc" pattern="[A-Za-z0-9_-]{1,15}" required autofocus>
                
              </div>

               <div class="form-label-group">
                <input type="text" id="fcaso" class="form-control" placeholder="Numero de caso" name="caso" required>
                
              </div>

              <div class="form-label-group">
                <input type="text" id="fserv" class="form-control" placeholder="Numero de servicio" name="serv" required>
                
              </div>


           
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Ingresar</button>
              <hr class="my-4">
              
            </form>

          </div>

</div>



