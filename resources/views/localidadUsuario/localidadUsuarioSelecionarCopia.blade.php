<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Usuarios</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body{
  background-color:white;

}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}


.contenedor-01{
    width:100%;
    padding-top: 40px;
    background-color: gray;

}

.contenedor-form{
    width:60%;
    margin: auto;
    background-color:white;
    padding: 30px;
}
</style>
</head>
<body>


  <ul>
    <li><a href="<?php echo url('/localidad/seleccionar/usuario') ?>">seleccionar Usuarios Por localidad</a></li>
  </ul>
  <div class="contenedor-01">
      <div class="contenedor-form">
          <form action="<?php echo url('/localidad/seleccionar/usuario'); ?>" method="POST">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="form-group">
                  <label for="localidad">Provincia</label><br />
                  <select name="localidad" id="localidad" style="width:100%;">
                      <?php
                         $i=0;
                          foreach ($localidades as $opcion) {
                              echo "<option value='{$opcion->id}'>{$opcion->NOMBRE} - {$provincias[$i]} - {$paises[$i]}</option>";
                              $i++;
                          }
                      ?>
                  </select>
              </div>
              <button type="submit" class="btn btn-primary">selecionar</button>
          </form>
      </div>
  </div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
