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
    if (user == "DSI" && pass== "1212") {
        window.location ="index/RELOJ.HTML"
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
        <form action="index/login_registrar.php" method="post"  class="form-login">
        <h5 class="h5">BIENVENIDA/O</h5>
        <input
          class="controls"
          type="text"
          id=""
          name="usuario"
          placeholder="USUARIO"
          required
        />
        <input
          class="controls"
          type="password"
          name="pass"
          id=""
          placeholder="PASSWORD"
          required
        />
        <input
          class="buttons"
          id=""
          type="submit"
          value="INGRESAR"
          name="btningresar"
        />
        <p><a href="#">¿Olvidaste tu contraseña?</a></p>
      </form>
    </div>
    <script src="/login.js"></script>
  </body>
</html>
