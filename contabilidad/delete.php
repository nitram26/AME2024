<?php

include("../index/conexion.php");
$con=conectar();

$id=$_GET['id'];

$sql="DELETE FROM alumnoc  WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>
