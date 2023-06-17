<?php
include("index/conexion.php");
$con = conectar();

$sql = "SELECT * FROM alumno";
$query = mysqli_query($con, $sql);
?>
<!-- /////////////////////////////////////////////////////////////////////// -->
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UT-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" type="text/css" href="index/login.php">
    <title>LOGIN</title>
    <style>
body{
    background-image: url(index/images/ISTP1.jpg);
     background-repeat: no-repeat; background-size: cover;
}
</style>
<script>
function login() {
    var user, pass;
    user = document.getElementById("usuario").value;
    pass = document.getElementById("contraseña").value;
    if (user == "DSI" && pass== "2024") {
        window.location ="index/10 RELOJ.HTML"
    }else{
   alert(`\n \n ERROR AL INGRESAR DATOS  \n POR FAVOR, INTÉNTELO UNA VEZ MÁS`)
    }
}
</script>
  </head>

  <body oncontextmenu="return false">
<body>
    <br/>
    <br/>
    <div class="form">
      <form class="form-login">
        <h5 class="h5">BIENVENIDA/O</h5>
        <input
          class="controls"
          type="text"
          id="usuario"
          placeholder="USUARIO"
        />
        <input
          class="controls"
          type="password"
          name="contrasena"
          id="contraseña"
          placeholder="CONTRASEÑA"
        />
        <input
          class="buttons"
          id="boton"
          type="button"
          value="INGRESAR"
          onclick="login()"
        />
        <p><a href="#">¿Olvidaste tu contraseña?</a></p>
      </form>
    </div>
    <script src="/login.js"></script>
  </body>
</html>
