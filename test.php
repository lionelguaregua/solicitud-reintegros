<?php include 'general/head.php';
include("general/nav.php") ?>

<div class="container">


<div class="form-group">
  <label for="sel1"><h3>Tipo de reembolso</h3></label>
  <select class="form-control" id="sel1">
    <option value="0" disabled selected>Seleccione</option>
    <optgroup label="Medicas">
    <option value="1">Asistencia Medica</option>
    <option value="2">Asistencia Odontologica</option>
    <option value="3">Medicamentos</option>
    </optgroup>
    <optgroup label="Aerolineas">
    <option value="4">Vuelo Demorado</option>
    <option value="5">Vuelo Cancelado</option>
    <option value="6">Equipaje Demorado</option>
    <option value="7">Equipaje Extraviado</option>
    </optgroup>
    <optgroup label="Otras coberturas">
    <option value="8">Late Arrival</option>
    <option value="9">Objetos Personales</option>
    <option value="10">Tech Protection</option>
    <option value="11">Cancelacion Multi-Causa</option>
    <option value="12">Comunicaciones</option>
    <option value="13">Repatriación Sanitaria</option>
    <option value="14">Regreso anticipado por fallecimiento de familiar</option>
    </optgroup>

  </select>
</div>
</form>

</div>

<script type="text/javascript">
  
  
</script>
