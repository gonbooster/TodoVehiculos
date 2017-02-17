<?php
session_start();
include_once('../core/conexion.php');
include_once('../core/functions.php');

	//Escribimos mensaje de que se desea solicitar el vehículo
	$idProducto=$_GET['id'];
	$producto=$_GET['producto'];
	$propietario=$_GET['propietario'];
	$accion=$_GET['accion'];
	$usuario=getDatosUsuario('Usuario');	
	$fecha = date("Y-m-d h:i:s");
	$remitente="Servicio de TodoVehiculos";
	$asunto="Nueva solicitud de ".$Usuario." para ".$accion." el producto ".$producto;
	$mensaje="El usuario ".$usuario." desea ".$accion." su producto: ".$producto;
	mysql_query("INSERT INTO mensajeria (remitente,destinatario,asunto,mensaje,fecha,estado) 
	VALUES ('$remitente','$propietario','$asunto','$mensaje','$fecha','0')")or die ("Error de insert de nuevo vehículo mensajeria");
	$asunto="Se ha mandado una solicitud al usuario  ".$propietario." para ".$accion." el producto ".$producto;
	$mensaje="Producto solicitado: ".$producto." a ".$propietario;
	mysql_query("INSERT INTO mensajeria (remitente,destinatario,asunto,mensaje,fecha,estado) 
	VALUES ('$remitente','$usuario','$asunto','$mensaje','$fecha','0')")or die ("Error de insert de nuevo vehículo mensajeria");
	
		
	header("Location: ../mensajeria.php?id=0");

?>