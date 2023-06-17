<?php
include("../index/conexion.php");
$con=conectar();
///////////////////////////////////
$id=$_POST['id'];
$nombres=$_POST['nombres'];
$apellido_p=$_POST['apellido_p'];
$apellido_m=$_POST['apellido_m'];
$sexo=$_POST['sexo'];
$fecha_n=$_POST['fecha_n'];
$email=$_POST['email'];
$celular=$_POST['celular'];
$egreso=$_POST['egreso'];
$red=$_POST['red'];
$trabajo=$_POST['trabajo'];
$condicion=$_POST['condicion'];
$distrito=$_POST['distrito'];
$direccion=$_POST['direccion'];
// ----------------------------------------
$ejemplo=$_FILES['ejemplo'] ["name"];
$ruta=$_FILES["ejemplo"] ["tmp_name"];
$destino="IMAGES/".$ejemplo;
copy($ruta, $destino);
//////////////////////////////////////////

$sql="INSERT INTO alumno VALUES('$id','$nombres','$apellido_p','$apellido_m','$sexo',
 '$fecha_n', '$email', '$celular', '$egreso', '$red', '$trabajo', '$condicion', '$distrito', '$direccion','$destino')";

$query= mysqli_query($con,$sql);

if($query){
    Header("Location:index.php");
}