<?php

include("../index/conexion.php");
$con=conectar();

$id=$_GET['id'];

$sql="DELETE FROM alumnoe  WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>
