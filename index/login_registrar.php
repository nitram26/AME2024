<?php 
include("conexion.php");
$con = conectar();

$nombre=$_POST["usuario"];
$pass  =$_POST["pass"];

//login
if(isset($_POST["btningresar"]))
{
  $query = mysqli_query($con, "SELECT * FROM usuario WHERE usuario = '$nombre' AND password= '$pass'");
  $nr = mysqli_num_rows($query);

    if ($nr==true) {
      
      header("location:10 RELOJ.HTML");
   
     
    } else {
      echo "<script>alert('USUARIO INEXISTENTE'); window.location= 'https://www.youtube.com/watch?v=BS8O3vNrV1U'</script>";
      
    }
}
