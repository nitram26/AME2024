<?php
function conectar(){
    $host="localhost";
    $user="root";
    $pass="";
    $bd="alumnos";

    $con=mysqli_connect($host,$user,$pass);
    mysqli_select_db($con,$bd);
    return $con;
    //PARA SABER SI FUNCIONA LA CONEXIÓN 
if ($con) {
 echo "HASTA AQUÍ TODO BIEN";
}
}
?>
