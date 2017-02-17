<?php
session_start();
include_once('../core/conexion.php');
include_once('../core/functions.php');
$usuario= htmlentities($_POST['r_Usuario']);
$nombre= htmlentities($_POST['r_Nombre']);
$apellido1= htmlentities($_POST['r_Apellido1']);
$apellido2= htmlentities($_POST['r_Apellido2']);
$email= htmlentities($_POST['r_Correo']);
$repetirEmail= htmlentities($_POST['r_RepetirCorreo']);
$password= htmlentities($_POST['r_Password']);
$repetirPassword= htmlentities($_POST['r_RepetirPassword']);
if((strlen($nombre) >= 3) && (strlen($usuario) >= 3) && (strlen($apellido1) >= 3) &&
(strlen($apellido2) >= 3) && ($email == $repetirEmail) && ($password == $repetirPassword) &&
($_SESSION['tmptxt'] == $_POST['tmptxt'])){
$verificacion_existencia = mysql_query("SELECT * FROM usuarios WHERE Usuario = '$usuario' or Email = '$email'") or die ("Error de select del registro");
	if(0 == mysql_fetch_array($verificacion_existencia))
	{
	$fecha_ingreso = date("Y-m-d h:i:s");
	$ip = getIP();
	$password = encriptacion($password);
	mysql_query("INSERT INTO usuarios (Usuario,Nombre,Apellido1,Apellido2,Password,Email,Fecha,IP) VALUES('$usuario','$nombre','$apellido1','$apellido2','$password','$email','$fecha_ingreso','$ip')") or die ("Error de insert del registro");
	$_SESSION['Email'] = $email;
	$_SESSION['Usuario'] = $usuario;
	header("Location: ../index.html");
	}
}else
	header("Location: ../index.html");
?>