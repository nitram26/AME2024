<?php
include("../index/conexion.php");
$con = conectar();

$sql = "SELECT * FROM alumnoe";
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
    <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
    <link 
href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" 
crossorigin="anonymous">
    <script>
      // do {
      //     clave = prompt('INTRODUZCA SU CLAVE')
      // } while (clave != '2024')
    </script>
  </head>

  <body style="background-position: 12%;background-color: #00fff0;" >
        <div class="headerdsi">
          <div class="titulo">

            <img src="../index/images/ISTP_SVM.jpg" alt="ISTP" class="img" />
            <div>
              <h1 style= "color:brown ">
                <i>INSTITUTO"SAN PEDRO DEL VALLE DE MALA"<br />
                   ENFERMERIA TÉCNICA</i>
              </h1>
              <h2 style= "text-align: center;">Registrar Egresados de Enfermería</h2><br>
            </div>
            
          </div>
  <div class="brand clearfix">
	</div>

  <div class="content-wrapper">
			<div class="container-fluid">

				<div style=" text-align: center;font-style: italic;background-position: 12%;background-color: aqua;">Se debe llenar todo el formulario</div><br>
            </div>
          </div>

          <table>
            <form
              action="insertar.php"
              method="POST"
              enctype="multipart/form-data"
            >

<div class="form-group">
<label class="col-sm-4 control-label"><h4 style="color: green" align="left">Información Personal </h4> </label>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Nº de DNI : </label>
<div class="col-sm-8">
<input type="text" name="id" class="form-control" required="required" placeholder="INGRESAR ID">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Nombres : </label>
<div class="col-sm-8">
<input type="text" name="nombres" class="form-control" required="required" placeholder="INGRESAR NOMBRES">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Apellido Paterno : </label>
<div class="col-sm-8">
<input type="text" name="apellido_p" class="form-control"  placeholder="INGRESAR APELLIDO PATERNO">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Apellido Materno : </label>
<div class="col-sm-8">
<input type="text" name="apellido_m" class="form-control"  placeholder="INGRESAR APELLIDO MATERNO">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Género : </label>
<div class="col-sm-7">
<select name="sexo" class="form-control" required="required">
<option value="">SELECCIONAR GÉNERO</option>
<option value="masculino">Masculino</option>
<option value="femenino">Femenino</option>
</select>
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Fecha Nacimiento</label>
<div class="col-sm-8">
<input type="date" name="fecha_n" id=""  class="form-control" >
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Correo Electrónico: </label>
<div class="col-sm-8">
<input type="email" name="email" id=""  class="form-control" required="required" placeholder="INGRESAR SU EMAIL">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Nº de Celular : </label>
<div class="col-sm-8">
<input type="text" name="celular" id="contact"  class="form-control" required="required" placeholder="INGRESAR Nº DE CELULAR">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Red Social : </label>
<div class="col-sm-7">
<select name="red" class="form-control" required="required">
<option value="">SELECCIONE UNA OPCIÓN</option>
<option value="whatsapp">WHATSAPP</option>
<option value="facebook">FACEBOOK</option>
<option value="twitter">TWITTER</option>
<option value="telegram">TELEGRAM</option>
<option value="otra">OTRA</option>
</select>
</div>
</div><br>

<div class="form-group">
<label class="col-sm-4 control-label"><h4 style="color: green" align="left">Información Académica</h4> </label>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Año de Egreso : </label>
<div class="col-sm-8">
<input type="text" name="egreso" id="contact"  class="form-control" required="required" placeholder="INGRESAR EL AÑO DE EGRESO">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Condición : </label>
<div class="col-sm-7">
<select name="condicion" class="form-control" required="required">
<option value="">SELECCIONE UNA OPCIÓN </option>
<option value="graduado">GRADUADO</option>
<option value="egresado">EGRESADO</option>
<option value="titulado">TITULADO</option>
</select>
</div>
</div><br>

<div class="form-group">
<label class="col-sm-4 control-label"><h4 style="color: green" align="left">Información Laboral</h4> </label>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Nombre de Empresa</label>
<div class="col-sm-8">
<input type="text" name="distrito" id=""  class="form-control" placeholder="NOMBRE DE EMPRESA QUE LABORA" >
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Dirección de Empresa</label>
<div class="col-sm-8">
<input type="text" name="direccion" id=""  class="form-control" placeholder="INDIQUE LA DIRECCIÓN DONDE LABORA" >
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Cargo que desempeña : </label>
<div class="col-sm-7">
<select name="trabajo" class="form-control" required="required">
<option value="">SELECCIONE UNA OPCIÓN</option>
<option value="Relacionado a la carrera">Relacionado a la carrera</option>
<option value="Relacionado a otro especialidad">Relacionado a otro especialidad</option>
<option value="Otros">Otros</option>
</select>
</div>
</div>
              <!-- //grupo4/////////////////////////////////////////////////////////// -->

              <tr>
                <td>
                  <input type="submit" class="btn" value="Guardar" />
                </td><br>

                <td>
                  <a href="buscar.php" class="buscar"><i>BUSCAR</i></a>
                </td>

                <td>
                  <a href="registros.php" class="buscar1"><i>REGISTROS</i></a>
                </td>

                <td>
                <a
                    href="http://localhost/AME2024A/index/10%20RELOJ.HTML"
                    class="buscar1"
                    ><i>MENÚ</i></a>
                </td>
              </tr>
            </form>
          
        </div>
      </div>
    </div>
  </body>
</html>
