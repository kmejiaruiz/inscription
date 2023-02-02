<?php
session_start();
if (!empty($_POST['botonEnviar'])) {
  if (!empty($_POST['carnet']) and !empty($_POST['pin'])) {
    $carnet = $_POST['carnet'];
    $pin = $_POST['pin'];
    $sql = $conectar->query("SELECT * from icl where carnet = '$carnet' and pin = '$pin'");
    if ($datos = $sql->fetch_object()) {
      $_SESSION["usuario"] = $datos->carnet;
      $_SESSION["nombre"] = $datos->name;
      $_SESSION["turno"] = $datos->modalidad;
      header("location:./icl/inicio/");
    } else {
      echo '
    <div class="alert alert-danger alert-dismissible fade show d-flex gap-2" role="alert" style="margin-top: -75px;"> 
    <i class="bi bi-x-circle"></i>
      Carnet o PIN incorrecto(s)
      <div type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" style="border:none;"></div>
    </div>';
    }
  } else {
    echo '
    <div class="alert alert-warning alert-dismissible fade show d-flex gap-2" role="alert" style="margin-top: -75px;">
    <i class="bi bi-exclamation-triangle-fill"></i>
      Los campos no pueden estar vacios
      <div type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" style="border:none;"></div>
    </div>';
  }
}
