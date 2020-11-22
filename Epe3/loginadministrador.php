<?php
 
$correo = $_POST['correo'];
$pass = $_POST['pass'];
 
if(empty($correo) || empty($pass)){
header("Location: loginadmin.html");
exit();
}
 
mysql_connect('localhost','root','') or die("Error al conectar " . mysql_error());
mysql_select_db('epe3') or die ("Error al seleccionar la Base de datos: " . mysql_error());
 
$result = mysql_query("SELECT * from usuario where correo='" .$correo. "'");
 
if($row = mysql_fetch_array($result)){
if($row['pass'] == $pass){
session_start();
$_SESSION['correo'] = $correo;
header("Location: registrarServicio.html");
}else{
header("Location: loginadmin.html");
exit();
}
}else{
header("Location: loginadmin.html");
exit();
}
 ?>
