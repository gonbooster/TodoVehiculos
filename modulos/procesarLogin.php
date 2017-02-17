<?php
session_start();
include_once('../core/conexion.php');
include_once('../core/functions.php');
$correo = htmlentities($_POST['l_correo']);
$contrasena = encriptacion($_POST['l_password']);
$consulta = mysql_query("SELECT * FROM usuarios WHERE Password = '$contrasena' and Email = '$correo'") or die ("Error de select del login");
if(mysql_fetch_array($consulta) == 0){
header("Location: ../index.html");
}
else{
	$ip = getIP();
	mysql_query("update usuarios set IP='$ip' WHERE Password = '$contrasena' and Email 	= '$correo'") or die ("Error de update del login");
	$_SESSION['Email'] = $correo;
	header("Location: ../index.html");
}

?>