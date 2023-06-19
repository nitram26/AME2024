<?php
include("../index/conexion.php");
$con=conectar();
// ------------------------------------------------
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

$ejemplo=$_POST['ejemplo'];
// -----------------------------------------------
$sql="UPDATE alumnoe SET  nombres='$nombres',
apellido_p='$apellido_p',
apellido_m='$apellido_m',
sexo='$sexo',
fecha_n='$fecha_n',
email='$email',
celular='$celular',
egreso='$egreso',
red='$red',
trabajo='$trabajo',
condicion='$condicion',
distrito='$distrito',
direccion='$direccion',

ejemplo='$ejemplo' WHERE id='$id'";
// --------------------------------------------------
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>