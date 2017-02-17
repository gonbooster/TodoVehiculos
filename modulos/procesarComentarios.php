<?php
session_start();
include_once('../core/conexion.php');
include_once('../core/functions.php');
$comentario= htmlentities($_POST['comentario']);
$id= htmlentities($_POST['id']);
$fecha= date("Y-m-d h:i:s");
$autor= getDatosUsuario('Usuario');
$usuarioId= getDatosUsuario('IdUsuario');
if(strlen($comentario) >= 3){
	mysql_query("INSERT INTO comentarios (IdUsuario,IdProducto,Autor,Comentario,Fecha) VALUES('$usuarioId','$id','$autor','$comentario','$fecha')") or die ("Error de ingreso del comentario");
	mysql_query("UPDATE productos SET Comentarios=Comentarios+1 WHERE IdProducto=$id") or die ("Error de Update del comentario en productos");
}
?>