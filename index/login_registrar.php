<?php 
//CONEXIÓN
include("conexion.php");
$con = conectar();
//CAPTURA DATOS
$nombre=$_POST["usuario"];
$pass  =$_POST["pass"];
//***************************** */
//VALIDAR USUARIO Y DESENCRIPTAR
if (isset($_POST['btningresar'])) {
  $query= mysqli_query($con, "SELECT * FROM usuario WHERE usuario = '$nombre'");

  $nr = mysqli_num_rows($query);

  $buscarpass = mysqli_fetch_array($query);

  if (($nr == 1)&&(password_verify($pass, $buscarpass['password']))) {
    echo   header("location:http://localhost/AME2024/index/10%20RELOJ.HTML"); 
  }else {
      echo "<script>alert('Usuario o Clave no registrado'); window.location = 'http://localhost/AME2024/' </script> ";
  }
}

//REISTRAR USUARIO

if (isset($_POST['btnregistrar'])) {
  $pass_fuerte = password_hash($pass, PASSWORD_DEFAULT);
  $queryregistrar = "INSERT INTO usuario(usuario, password) values ('$nombre', '$pass_fuerte')";
  if (mysqli_query($con,$queryregistrar)){
      echo "<script>alert('Usuario registrado: $nombre'); window.location = 'http://localhost/AME2024/' </script> ";
  }else {
      echo "Error:".$queryregistrar."<br>.msqli_error($con)";
  }
} 


















