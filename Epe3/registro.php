<?php

include "conexion.php";
$cod=$_REQUEST['cod'];
$empresa=$_REQUEST['empresa'];
$tipo=$_REQUEST['tipo'];
$correo=$_REQUEST['correo'];
$precio=$_REQUEST['precio'];

$query="insert into servicio values('$cod','$empresa','$tipo','$correo', '$precio'  )";//cambiar tabla

$cierto=mysql_query($query);//incertar
//preguntar si se inserto el dato
if(!$cierto){


echo"<!doctype html>
<html lang='en'>
  <head>
	<title>Title</title>
	<!-- Required meta tags -->
	<meta charset='utf-8'>
	<meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>

	<!-- Bootstrap CSS -->
	<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
  </head>
  <body>
	  



  <div class='modal-dialog  modal-lg modal-dialog-centered'>
  <div class='modal-content'>

	<!-- cabecera del diálogo -->
	<div class='modal-header bg-warning'>
	  <h2 class='modal-title '>Registro Fallido</h2>
	
	</div>

	<!-- cuerpo del diálogo -->
	<div class='modal-body bg-secondary text-white'>
   <h1>Error al registrar, servicio ya se encuentra registrado, revise que no este el utilizando el mismo id</h1><br>
	</div>

	<!-- pie del diálogo -->
	<div class='modal-footer bg-warning justify-content-center'>
	<form method='post' action='login.html'>

	<a href='registrarServicio.html'><button type='button' class='btn btn-success' data-dismiss='modal'>Volver</button></a>
	</div>
</div>
</div>";

  
	

}
else{
	
echo"<!doctype html>
<html lang='en'>
  <head>
	<title>Title</title>
	<!-- Required meta tags -->
	<meta charset='utf-8'>
	<meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>

	<!-- Bootstrap CSS -->
	<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
  </head>
  <body>
	  





  <div class='modal-dialog  modal-lg modal-dialog-centered'>
  <div class='modal-content'>

	<!-- cabecera del diálogo -->
	<div class='modal-header bg-warning'>
	  <h2 class='modal-title '>Registro Exitoso</h2>
	
	</div>

	<!-- cuerpo del diálogo -->
	<div class='modal-body bg-secondary text-white'>
    <h2>Felicidades el servicio se ha guardado correctamente</h2>
	</div>

	<!-- pie del diálogo -->
	<div class='modal-footer bg-warning justify-content-center'>
	<form method='post' action='servicios.php'>
	<button type='submit' id='servicios' name='servicios' class='btn btn-primary' >Servicios registrados</button></form>
	<a href='registrarServicio.html'><button type='button' class='btn btn-success' data-dismiss='modal'>Volver</button></a>
	</div>
</div>
</div>










	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src='https://code.jquery.com/jquery-3.3.1.slim.min.js' integrity='sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo' crossorigin='anonymous'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js' integrity='sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1' crossorigin='anonymous'></script>
	<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js' integrity='sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM' crossorigin='anonymous'></script>
  </body>
</html> ";



}
?>
