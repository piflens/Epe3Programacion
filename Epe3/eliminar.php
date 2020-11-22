<?php
include 'conexion.php';

$id=$_GET['id'];
$sql="delete from servicio where cod='".$id."'";
mysql_query($sql);
header("location:servicios.php");


?>