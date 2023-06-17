<?php
include("../index/conexion.php");
$con = conectar();

$sql = "SELECT * FROM alumno";
$query = mysqli_query($con, $sql);
?>
<!-- /////////////////////////////////////////////////////////////////////// -->
<!DOCTYPE html>
<html lang="es">
  <head>
    <title> </title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="../index/styles.php" />
    <script>
      // do {
      //     clave = prompt('INTRODUZCA SU CLAVE')
      // } while (clave != '2024')
    </script>
  </head>
  <body>
    <!-- /////////////////////////////////////////////////////////////// -->
    <div class="">
      <div class="">
        <div class="headere">
          <div class="titulo">
            <img src="../index/images/ISTP_SVM.jpg" alt="ISTP" class="img" />
            <div>
              <h1>
                <i
                  >INSTITUTO"SAN PEDRO DEL VALLE DE MALA"<br />Base de Datos de
                  Egresados DE ENFERMERÍA
                </i>
              </h1>
            </div>
          </div>
          <table>
            <form
              action="insertar.php"
              method="POST"
              enctype="multipart/form-data"
            >
              <tr>
                <td class="td">
                  <input
                    type="text"
                    name="id"
                    placeholder="ID"
                    class="input"
                  />
                </td>
                <td class="td">
                  <input
                    type="text"
                    name="nombres"
                    placeholder="NOMBRES"
                    class="input"
                  />
                </td>
                <td class="td">
                  <input
                    type="text"
                    name="apellido_p"
                    placeholder="APELLIDO_P"
                    class="input"
                  />
                </td>
              </tr>
              <!-- grupo 2 ///////////////////////////////////////////////////////////-->
              <tr>
                <td class="td">
                  <input
                    type="text"
                    name="apellido_m"
                    placeholder="APELLIDO_M"
                    class="input"
                  />
                </td>
                <td class="td">
                  <input
                    type="text"
                    name="sexo"
                    placeholder="SEXO"
                    class="input"
                  />
                </td>

                <td class="td">
                  <input
                    type="date"
                    name="fecha_n"
                    placeholder="FECHA_NACIMIENTO"
                    class="input"
                  />
                </td>
              </tr>
              <tr>
                <td class="td">
                  <input
                    type="text"
                    name="email"
                    placeholder="EMAIL"
                    class="input"
                  />
                </td>

                <td class="td">
                  <input
                    type="text"
                    name="celular"
                    placeholder="CELULAR"
                    class="input"
                  />
                </td>
                <td class="td">
                  <input
                    type="text"
                    name="egreso"
                    placeholder="AÑO DE EGRESO"
                    class="input"
                  />
                </td>
              </tr>
              <!-- ///grupo3/////////////////////////////////// -->
              <tr>
                <td class="td">
                  <input
                    type="text"
                    name="red"
                    placeholder="RED SOCIAL"
                    class="input"
                  />
                </td>
                <td class="td">
                  <input
                    type="text"
                    name="condicion"
                    placeholder="CONDICIÓN DEL EGRESADO"
                    class="input"
                  />
                </td>
                <td class="td">
                  <input
                    type="text"
                    name="distrito"
                    placeholder="DISTRITO"
                    class="input"
                  />
                </td>
              </tr>
              <!-- //grupo4/////////////////////////////////////////////////////////// -->
              <tr>
                <td class="td">
                  <input
                    type="text"
                    name="direccion"
                    placeholder="DIRECCIÓN"
                    class="input"
                  />
                </td>
              </tr>

              <tr>
                <td>
                  <input
                    type="file"
                    style="border: 3px double brown; padding: 10px"
                    name="ejemplo"
                  />
                </td>
                <td>
                  <input type="submit" class="btn" value="INGRESAR DATOS" />
                </td>
                <td style="background-color: darkcyan">
                  <a href="http://localhost/AME2023/buscar.php" class="buscar"
                    ><i>IR A BUSCAR</i></a
                  >
                  <a
                    href="http://localhost/AME2023/registros.php"
                    class="buscar1"
                    ><i>IR A REGISTROS</i></a
                  >
                </td>
              </tr>
            </form>
          </table>
        </div>
      </div>
    </div>
  </body>
</html>
