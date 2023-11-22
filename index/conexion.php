<?php
function conectar(){
    $host="carmelitae.great-site.net";
    $user="si0_35191492";
    $pass="g5ZxSuiBcf5";
    $bd="if0_35191492_alumnos";

    $con=mysqli_connect($host,$user,$pass, $bd);
    // mysqli_select_db($con,$bd);
    return $con;
    //PARA SABER SI FUNCIONA LA CONEXIÓN
if ($con==true) {
 echo "HASTA AQUÍ TODO BIEN";
}
}



?>
