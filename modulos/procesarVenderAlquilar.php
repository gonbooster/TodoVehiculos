<?php
session_start();
include_once('../core/conexion.php');
include_once('../core/functions.php');
$nombre= htmlentities($_POST['vender_nombre']);
$tipo= htmlentities($_POST['vender_tipo']);
$disposicion= htmlentities($_POST['vender_para']);
$modelo= htmlentities($_POST['vender_modelo']);
$precio= htmlentities($_POST['vender_precio']);
$descripcion= htmlentities($_POST['vender_descripcion']);
$kms= htmlentities($_POST['vender_kms']);
$combustible= htmlentities($_POST['vender_combustible']);
$antiguedad= htmlentities($_POST['vender_antiguedad']);
$estado= htmlentities($_POST['vender_estado']);
$carroceria= htmlentities($_POST['vender_carroceria']);
$cambio= htmlentities($_POST['vender_cambio']);
$equipamiento= htmlentities($_POST['vender_equipamiento']);
$color= htmlentities($_POST['vender_color']);
$version= htmlentities($_POST['vender_version']);
$URLImagen= htmlentities($_POST['vender_URLImagen']);
$usuario=getDatosUsuario('Usuario');	
$fecha = date("Y-m-d h:i:s");

mysql_query("INSERT INTO productos (Producto, Tipo, Disposicion, Kms, Antiguedad, Carroceria, Equipacion, Version, Descripcion, Precio, Modelo, Combustible, Estado, Cambio, Color, URLImagen, FechaCreacion, Usuario) 
VALUES('$nombre','$tipo','$disposicion','$kms','$antiguedad','$carroceria','$equipamiento','$version','$descripcion','$precio','$modelo','$combustible','$estado','$cambio','$color','$URLImagen','$fecha', '$usuario')") or die ("Error de ingreso del vehículo a vemder/alquilar");

	header("Location: ../index.html");

?>