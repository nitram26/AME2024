<?php
include("../index/conexion.php");
$con = conectar();

$sql = "SELECT * FROM alumnoc";
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
    <div class="">
      <div class="">
        <!-- /////////////////////////////////////////////////////////////// -->
        <div class="headerdsi">
          <div class="titulo">
            <img src="../index/images/ISTP_SVM.jpg" alt="ISTP" class="img" />
            <div>
              <h1 style= "color:brown ">
                <i
                  >INSTITUTO"SAN PEDRO DEL VALLE DE MALA"<br />
                   DSI
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
                <td class="tddsi">
                  <input
                    type="text"
                    name="id"
                    placeholder="ID"
                    class="input"
                  />
                </td>
                <td class="tddsi">
                  <input
                    type="text"
                    name="nombres"
                    placeholder="NOMBRES"
                    class="input"
                  />
                </td>
                <td class="tddsi">
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
                <td class="tddsi">
                  <input
                    type="text"
                    name="apellido_m"
                    placeholder="APELLIDO_M"
                    class="input"
                  />
                </td>
                <td class="tddsi">
                     <select name="sexo" id="sexo" class="select">
                  <option value="">SEXO</option>
                  <option value="masculino">MASCULINO</option>
                  <option value="femenino">FEMENINO</option>
                </select>
                <select name="condicion" id="condicion" class="select">
                  <option value="">CONDICIÓN</option>
                  <option value="egresado">EGRESADO</option>
                  <option value="titulado">TITULADO</option>
                </select>
                </td>

                <td class="tddsi">
                  <label for="" class="label">Fecha de Nacimiento</label>
                  <input
                    type="date"
                    name="fecha_n"
                    class="input"
                    placeholder=""
                  />
                </td>
              </tr>
              <tr>
                <td class="tddsi">
                  <input
                    type="text"
                    name="email"
                    placeholder="EMAIL"
                    class="input"
                  />
                </td>

                <td class="tddsi">
                  <input
                    type="text"
                    name="celular"
                    placeholder="CELULAR"
                    class="input"
                  />
                </td>
                <td class="tddsi">
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
                       <td class="tddsi">
                  <input
                    type="text"
                    name="distrito"
                    placeholder="VIVE EN:DISTRITO"
                    class="input"
                  />
                </td>
                <td class="tddsi">
                <select name="red" id="red" class="select">
                  <option value=""> RedSOCIAL</option>
                  <option value="whatsapp">WHATSAPP</option>
                  <option value="facebook">FACEBOOK</option>
                  <option value="twitter">TWITTER</option>
                  <option value="telegram">TELEGRAM</option>
                  <option value="otra">OTRA</option>
                </select>
                <select name="trabajo" id="trabajo" class="select">
                  <option value=""> TRABAJA EN</option>
                  <option value="carrera">CARRERA</option>
                  <option value="similar">SIMILAR</option>
                  <option value="otra">OTRA</option>
                </select>
                </td>
                     <td class="tddsi">
                  <input
                    type="text"
                    name="direccion"
                    placeholder="DIRECCIÓN LABORAL"
                    class="input"
                  />
                </td>
              </tr>
              <!-- //grupo4/////////////////////////////////////////////////////////// -->
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
                  <a href="http://localhost/AME2024/contabilidad/buscar.php" class="buscar"
                    ><i>IR A BUSCAR</i></a
                  >
                  <a
                    href="http://localhost/AME2024/contabilidad/registros.php"
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
