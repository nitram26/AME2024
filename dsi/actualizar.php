<?php
include("../index/conexion.php");
$con = conectar();

$id = $_GET['id'];

$sql = "SELECT * FROM alumno WHERE id='$id'";
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
    <link 
href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" 
crossorigin="anonymous">
    <title>ACTUALIZAR</title>
  </head>
  <body>
    <h1><i>ACTUALIZAR INFORMACIÓN</i></h1>
    <h1><i>Desarrollo de Sistemas de Información </i></h1>

    <div class="header">
      <form action="update.php" method="POST">
        <table>
          
            <input type="hidden" name="id" value="<?php echo $row['id']  ?>" />
           
            <div class="content-wrapper">
			<div class="container-fluid">

				<div style=" text-align: center;font-style: italic;background-position: 12%;background-color: aqua;">Se debe modificar solo los campos necesarios</div><br>
<table>
<div class="form-group">
<label class="col-sm-4 control-label"><h4 style="color: green" align="left">Información Personal </h4> </label>
</div>    
<div class="form-group">
<label class="col-sm-2 control-label">Nombres : </label>
<div class="col-sm-8">
<input type="text" name="nombres" class="form-control" required="required" placeholder="INGRESAR NOMBRES" value="<?php echo $row['nombres']  ?>">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Apellido Paterno : </label>
<div class="col-sm-8">
<input type="text" name="apellido_p" class="form-control"  placeholder="INGRESAR APELLIDO PATERNO"value="<?php echo $row['apellido_p']  ?>">
</div>
</div>


<div class="form-group">
<label class="col-sm-2 control-label">Apellido Materno : </label>
<div class="col-sm-8">
<input type="text" name="apellido_m" class="form-control"  placeholder="INGRESAR APELLIDO MATERNO" value="<?php echo $row['apellido_m']  ?>">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Género : </label>
<div class="col-sm-8">
<input type="text" class="form-control" name="sexo" placeholder="SEXO" value="<?php echo $row['sexo']  ?>"/>
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Fecha Nacimiento</label>
<div class="col-sm-8">
<input type="text" class="form-control" name="fecha_n" placeholder="FECHA DE NACIMIENTO" value="<?php echo $row['fecha_n']  ?>"/>
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Correo Electrónico: </label>
<div class="col-sm-8">
<input type="email" name="email" id=""  class="form-control" required="required" placeholder="INGRESAR SU EMAIL" value="<?php echo $row['email']  ?>">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Nº de Celular : </label>
<div class="col-sm-8">
<input type="text" name="celular" id="contact"  class="form-control" required="required" placeholder="INGRESAR Nº DE CELULAR" value="<?php echo $row['celular']  ?>">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Red Social : </label>
<div class="col-sm-8">
<input type="text" class="form-control"  name="red"  placeholder="RED"  value="<?php echo $row['red']  ?>" />
</div>
</div><br>

<div class="form-group">
<label class="col-sm-4 control-label"><h4 style="color: green" align="left">Información Académica</h4> </label>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Año de Egreso : </label>
<div class="col-sm-8">
<input type="text" name="egreso" id="contact"  class="form-control" required="required" placeholder="INGRESAR EL AÑO DE EGRESO" value="<?php echo $row['egreso']  ?>">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Condición : </label>
<div class="col-sm-8">
<input type="text"  class="form-control"  name="condicion" placeholder="CONDICION" value="<?php echo $row['condicion']  ?>" />
</div>
</div><br>

<div class="form-group">
<label class="col-sm-4 control-label"><h4 style="color: green" align="left">Información Laboral</h4> </label>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Nombre de Empresa</label>
<div class="col-sm-8">
<input type="text" name="distrito" id=""  class="form-control" placeholder="NOMBRE DE EMPRESA QUE LABORA" value="<?php echo $row['distrito']  ?>">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Dirección de Empresa</label>
<div class="col-sm-8">
<input type="text" name="direccion" id=""  class="form-control" placeholder="INDIQUE LA DIRECCIÓN DONDE LABORA" value="<?php echo $row['direccion']  ?>">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Cargo que desempeña : </label>
<div class="col-sm-8">
<input type="text" class="form-control"  name="trabajo" placeholder="TRABAJO" value="<?php echo $row['trabajo']  ?>" />
</div>
</div>
    
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

