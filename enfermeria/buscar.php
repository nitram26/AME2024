<?php
include("../index/conexion.php");
$con = conectar();
//PARA SABER SI FUNCIONA LA CONEXIÓN 
// if ($con) {
//  echo "HASTA AQUÍ TODO BIEN";
//}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" type="text/css" href="../index/styles.php">
  <title>BUSCAR</title>
</head>

<!-- /////////////////////////////////////// -->

<body>
  <div class="buscar7">
    <h2 style="padding-left: 200px;"><i>ISTP "SAN PEDRO DEL VALLE DE MALA"</i></h2>
    <H1><i>INGRESE UNA REFERENCIA</i></H1>
    <div class="table">
      <form action="" method="get">
        <input type="text" name='busqueda' class="buscar">
        <input type="submit" name='enviar' value='BUSCAR' class="btn">
        <a href="http://localhost/AME2024/enfermeria/" class="buscar">IR AL INDEX</a>
      </form>
    </div>
  </div>
  <br><br>
  <hr>
  <!-- /////////////////////////////////////// -->
  <H2>RESULTADO</H2>
  <?php
  if (isset($_GET['enviar'])) {
    $busqueda = $_GET['busqueda'];

    $consulta = $con->query("SELECT * FROM alumnoe WHERE (
   id LIKE '%$busqueda%' OR  
   nombres LIKE '%$busqueda%' OR
   apellido_p LIKE '%$busqueda%' OR
   apellido_m LIKE '%$busqueda%' OR
   sexo LIKE '%$busqueda%' OR
   condicion LIKE '%$busqueda%' OR
   fecha_n LIKE '%$busqueda%' OR
   email LIKE '%$busqueda%' OR
  egreso LIKE '%$busqueda%' OR
  red LIKE '%$busqueda%' OR
  trabajo LIKE '%$busqueda%' OR
   distrito LIKE '%$busqueda%' OR
   direccion LIKE '%$busqueda%' 
 
   
   );    
    ");

  ?>
    <table>
      <thead class="">
        <TH>ID</TH>
        <th>NOMBRES </th>
        <TH>APELLIDO_P</TH>
        <TH>APELLIDO_M</TH>
        <TH>SEXO</TH>
        <TH>CONDICION</TH>
        <TH>FECHA DE NACIMIENTO</TH>
        <TH>EMAIL</TH>
        <TH>CELULAR</TH>
        <TH>EGRESO</TH>
        <TH>VIVE EN:</TH>
        <TH>RED SOCIAL</TH>
        <TH>OCUPACIÓN</TH>
        <TH>DIRECCION LABORAL</TH>



        <TH>RUTA DE IMAGEN</TH>
        <th>IMAGEN</th>
      </thead>

      <?php
      while ($row = $consulta->fetch_array()) {
      ?>
        <!-- //////////////////////////////////////////////////////// -->
        <tbody>
          <td class="td"><?php echo $row['id']; ?></td>
          <td class="td"><?php echo $row['nombres']; ?></td>
          <td class="td"><?php echo $row['apellido_p']; ?></td>
          <td class="td"><?php echo $row['apellido_m']; ?></td>
          <td class="td"><?php echo $row['sexo']; ?></td>
          <td class="td"><?php echo $row['condicion']; ?></td>
          <td class="td"><?php echo $row['fecha_n']; ?></td>
          <td class="td"><?php echo $row['email']; ?></td>
          <td class="td"><?php echo $row['celular']; ?></td>
          <td class="td"><?php echo $row['egreso']; ?></td>
          <td class="td"><?php echo $row['distrito']; ?></td>
          <td class="td"><?php echo $row['red']; ?></td>
          <td class="td"><?php echo $row['trabajo']; ?></td>
          <td class="td"><?php echo $row['direccion']; ?></td>

          <!-- /////////////////////////////////////////////////////////////// -->
          <td class="td"><?php echo $row['ejemplo']; ?></td>
          <td><?php echo '<img src="' . $row['ejemplo'] . '" width="100" height="100">'; ?></td>
        </tbody>
    <?php
      }
    }
    ?>
    <hr>
    </table>
</body>
</html>