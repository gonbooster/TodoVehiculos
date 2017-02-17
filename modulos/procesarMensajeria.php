<?php
session_start();
include_once('../core/conexion.php');
include_once('../core/functions.php');
$us = getDatosUsuario('Usuario');
$id = $_GET['id'];
$msj = @$_GET['msj'];
switch($id){
	case 0: //borrar en bandeja de entrada
			mysql_query("DELETE FROM mensajeria WHERE IdMensajeria = '$msj'") or die("Error :: borrar en bandeja de entrada");
			header("Location: ../mensajeria.php?id=0");
		break;
	case 1: // borrar en enviados	
			mysql_query("DELETE FROM mensajeriaenviados WHERE IdMensajeriaEnviados = '$msj'") or die("Error :: borrar en enviados");
			header("Location: ../mensajeria.php?id=0");
		break;
	case 2: //enviar
				$des = $_POST['msj_destinatario'];
			$asu = $_POST['msj_asunto'];
			$men = $_POST['msj_mensaje'];
			$fec = date('d-m-Y H:i:s');
			$est = 0;
			mysql_query("INSERT INTO mensajeria (remitente,destinatario,asunto,mensaje,fecha,estado) 
			VALUES ('$us','$des','$asu','$men','$fec','$est')") or die("Error :: insertar mensajeria");
			mysql_query("INSERT INTO mensajeriaenviados (remitente,destinatario,asunto,mensaje,fecha,estado) 
			VALUES ('$us','$des','$asu','$men','$fec','$est')") or die("Error :: insertar mensajeriaenviados");
			header("Location: ../mensajeria.php?id=0");
		break;
		}
?>