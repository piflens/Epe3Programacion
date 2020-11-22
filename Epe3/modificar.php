


<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body class="bg-light">
      
   
 







<?php 


// Desactivar toda notificación de error
error_reporting(0);









include 'conexion.php';
$id=$_GET['id'];
$sql= "select * from servicio where cod='".$id."'";
$resultado=mysql_query($sql);
while ($fila=mysql_fetch_assoc($resultado)){



?>

<div class="container mt-5">
<div class="card">
<div class="card-body text-center bg-secondary">
<div class="card-header bg-warning">
 <h2>Modificar</h2>   
</div><br>
<form class="text-white">

<input type="hidden" name="txtcod"  id=txtcod"  value="<?php  echo $fila['cod']  ?>">


<!-- INPUT EMPRESA -->
<label><b>Empresa:</b></label><br>
<div class="input-group justify-content-center">
<input type="text" name="txtempresa" id="txtempresa"   value="<?php  echo $fila['empresa']  ?>"><br>
<div class="input-group-append">
            <!--usamos los fa para los icon -->
            <!--y ademas un span para que se agrande con un fondo gris-->
<span class="input-group-text"> <i class="fa fa-building"></i> </span>
</div>
</div>
<!-- CIERRE EMPRESA -->

<!--INPUT SERVICIO -->
<label ><b>Servicio:</b></label><br>
<div class="input-group justify-content-center">
<input type="text" name="txttipo" id="txttipo" value="<?php  echo $fila['tipo']  ?>"><br>
<div class="input-group-append">
            <!--usamos los fa para los icon -->
            <!--y ademas un span para que se agrande con un fondo gris-->
<span class="input-group-text"> <i class="fas fa-globe-americas"></i> </span>
</div>
</div>
<!-- CIERRE SERVICIO -->



<!-- INPUT CORREO -->
<label ><b>Correo:</b></label><br>
<div class="input-group justify-content-center">
<input type="text" name="txtcorreo"  id="txtcorreo" value="<?php  echo $fila['correo']  ?>"><br>
<div class="input-group-append">
            <!--usamos los fa para los icon -->
            <!--y ademas un span para que se agrande con un fondo gris-->
<span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
</div>
</div>
<!-- CIERRE CORREO -->


<!--INPUT PRECIO -->
<label><b>Precio</b></label><br>
<div class="input-group justify-content-center">
<input type="number" name="txtprecio" id="txtcorreo" value="<?php  echo $fila['precio']  ?>" ><br>
<div class="input-group-append">
            <!--usamos los fa para los icon -->
            <!--y ademas un span para que se agrande con un fondo gris-->
<span class="input-group-text"> <i class="fa fa-dollar-sign"></i> </span>
</div>
</div><br>
<!-- CIERRE PRECIO-->

<input type="submit" name="" value="Actualizar" class="btn btn-success btn-md">
<a type="button" class="btn btn-warning " href="servicios.php">Volver</a>
</form>


<?php } ?>
</div>
</div>
</div>







<?php 

$empresa=$_GET['txtempresa'];
$codS=$_GET['txtcod'];
$tipo=$_GET['txttipo'];
$correo=$_GET['txtcorreo'];
$precio=$_GET['txtprecio'];

if ($empresa!=null || $tipo!=null ||  $correo!=null || $precio!=null ){
$sql2 = "update servicio set empresa='".$empresa."', tipo='".$tipo."', correo='".$correo."', precio='".$precio."' where cod='".$codS."'";
mysql_query($sql2);
if($empresa=1){

header("location:servicios.php");


}


}

?>





 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.1.1/js/all.js" integrity="sha384-BtvRZcyfv4r0x/phJt9Y9HhnN5ur1Z+kZbKVgzVBAlQZX4jvAuImlIz+bG7TS00a" crossorigin="anonymous"></script>
</body>
</html>