<?php
include("../index/conexion.php");
$con = conectar();

$id = $_GET['id'];

$sql = "SELECT * FROM alumnoe WHERE id='$id'";
$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);
?>
<!-- /////////////////////////////////////////////////////////////////////////////// -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <title></title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="../index/styles.php" />
    <title>ACTUALIZAR</title>
  </head>
  <body>
    <h1><i>ACTUALIZAR INFORMACIÓN</i></h1>
    <div class="header">
      <form action="update.php" method="POST">
        <table>
          <tr>
            <input type="hidden" name="id" value="<?php echo $row['id']  ?>" />
            <td class="td">
              <input
                type="text"
                class="ingresarDatos"
                name="nombres"
                placeholder="NOMBRES "
                value="<?php echo $row['nombres']  ?>"
              />
            </td>
            <td class="td">
              <input
                type="text"
                class="ingresarDatos"
                name="apellido_p"
                placeholder="APELLIDO_P"
                value="<?php echo $row['apellido_p']  ?>"
              />
            </td>
            <td class="td">
              <input
                type="text"
                class="ingresarDatos"
                name="apellido_m"
                placeholder="APELLIDO_M"
                value="<?php echo $row['apellido_m']  ?>"
              />
            </td>
          </tr>
<!-- ///////////////////////////////////////////////////////////////////////// -->
          <tr>
            <td class="td">
              <input
                type="text"
                class="ingresarDatos"
                name="sexo"
                placeholder="SEXO"
                value="<?php echo $row['sexo']  ?>"
              />
            </td>
            <td>
              <input
                type="text"
                class="ingresarDatos"
                name="fecha_n"
                placeholder="FECHA DE NACIMIENTO"
                value="<?php echo $row['fecha_n']  ?>"
              />
            </td>
            <td class="td">
              <input
                type="text"
                class="ingresarDatos"
                name="email"
                placeholder="EMAIL"
                value="<?php echo $row['email']  ?>"
              />
            </td>
          </tr>
<!-- ///////////////////////////////////////////////////////////////////////// -->
          <tr>
            <td class="td">
              <input
                type="text"
                class="ingresarDatos"
                name="celular"
                placeholder="CELULAR"
                value="<?php echo $row['celular']  ?>"
              />
            </td>
            <td class="td">
              <input
                type="text"
                class="ingresarDatos"
                name="egreso"
                placeholder="AÑO DE EGRESO"
                value="<?php echo $row['egreso']  ?>"
              />
            </td>
            <td class="td">
              <input
                type="text"
                class="ingresarDatos"
                name="red"
                placeholder="RED"
                value="<?php echo $row['red']  ?>"
              />
            </td>
          </tr>
<!-- ///////////////////////////////////////////////////////////////////////// -->
          <tr>
                <td class="td">
              <input
                type="text"
                class="ingresarDatos"
                name="trabajo"
                placeholder="TRABAJO"
                value="<?php echo $row['trabajo']  ?>"
              />
            </td>
            <td class="td">
              <input
                type="text"
                class="ingresarDatos"
                name="condicion"
                placeholder="CONDICION"
                value="<?php echo $row['condicion']  ?>"
              />
            </td>
            <td class="td">
              <input
                type="text"
                class="ingresarDatos"
                name="distrito"
                placeholder="DISTRITO"
                value="<?php echo $row['distrito']  ?>"
              />
            </td>
          </tr>
<!-- ///////////////////////////////////////////////////////////////////////// -->
          <tr>
               <td class="td">
              <input
                type="text"
                class="ingresarDatos"
                name="direccion"
                placeholder="DIRECCION"
                value="<?php echo $row['direccion']  ?>"
              />
            </td>
          </tr>
        </table>
 <!-- ------------------------------------  -->
        <input
          type="text"
          class="ingresarDatos"
          name="ejemplo"
          placeholder="EJEMPLO"
          value="<?php echo $row['ejemplo']  ?>"
        />
        <input type="submit" class="inputId" value="ACTUALIZAR" />
      </form>
    </div>
  </body>
</html>
