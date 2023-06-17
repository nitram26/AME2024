<?php
include("../index/conexion.php");
$con = conectar();

$sql = "SELECT * FROM alumno";
$query = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title> </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../index/styles.php">
    <script>
        do {
            clave = prompt('INTRODUZCA SU CLAVE')
        } while (clave != '2024')
    </script>
</head>
<body>
  <!-- //////////////////////////////////////////////////// -->
  <h1 class="th1" style="font-size:25px">DESARROLLO DE SISTEMAS DE INFORMACIÓN</h1>
<div class="">
<table class="">
<thead class="">
    <tr class="">
        <th class="th">ID</th>
        <th class="th">NOMBRES </th>
        <th class="th">APELLIDO_P</th>
        <th class="th">APELLIDO_M</th>
        <th class="th">SEXO</th>
        <th class="th">FECHA NACIMIENTO</th>
        <th class="th">EMAIL</th>
        <th class="th">CELULAR</th>
        <th class="th">EGRESO</th>
        <th class="th">RED</th>
        <th class="th">TRABAJO</th>
        <th class="th">CONDICIÓN</th>
        <th class="th">DISTRITO</th>
        <th class="th">DIRECCIÓN</th>

        <!-- ------------------------------------ -->
        <th class="th">RUTA DE IMAGEN</th>
        <th class="th">EDITAR</th>
        <th class="th">ELIMINAR</th>

    </tr>
</thead>
    <tbody>
        <?php
        while ($row = mysqli_fetch_array($query)) {
        ?>
            <tr class="th">
                <th class="th"><?php echo $row['id'] ?></th>
                <th class="th"><?php echo $row['nombres'] ?></th>
                <th class="th"><?php echo $row['apellido_p'] ?></th>
                <th class="th"><?php echo $row['apellido_m'] ?></th>
                <th class="th"><?php echo $row['sexo'] ?></th>
                <th class="th"><?php echo $row['fecha_n'] ?></th>
                <th class="th"><?php echo $row['email'] ?></th>
                <th class="th"><?php echo $row['celular'] ?></th>
                <th class="th"><?php echo $row['egreso'] ?></th>
                <th class="th"><?php echo $row['red'] ?></th>
                <th class="th"><?php echo $row['trabajo'] ?></th>
                <th class="th"><?php echo $row['condicion'] ?></th>
                <th class="th"><?php echo $row['distrito'] ?></th>
                <th class="th"><?php echo $row['direccion'] ?></th>
<!-- ----------------------------------------------------- -->
                <th class="th"><?php echo $row['ejemplo'] ?></th>
                <th class="th"><a href="actualizar.php?id=<?php echo $row['id'] ?>" class="bot">EDITAR</a></th>
                <th class="th"><a href="delete.php?id=<?php echo $row['id'] ?>" class="bot">ELIMINAR</a></th>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>
</div>
</div>
</div>
  </body>

</html>