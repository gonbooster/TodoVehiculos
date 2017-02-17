<?php

function totalProductosComprarOAlquilar($disposicion){
	$tablaProductos= mysql_query("select * from productos WHERE Disposicion ='".$disposicion."'") or die ("totalProductos :: Error en la base de datos.");
	return mysql_num_rows($tablaProductos);
}

function imprimirComprarOAlquilar($disposicion){
		if(!isset($_GET['pag']))
			$pag = 1;
		else
			$pag = $_GET['pag'];
		$registrosPagina = 10;
		if($pag == 1)
			$listaInicio = 0;
		else
			$listaInicio = $registrosPagina * ($pag - 1);		
		$result= mysql_query("select * FROM productos WHERE Disposicion ='".$disposicion."' ORDER BY FechaCreacion DESC LIMIT $listaInicio, $registrosPagina") or die ("imprimirComprarOAlquilar :: Error en la base de datos.");
		$total= mysql_num_rows($result);
		if ($row = mysql_fetch_array($result)){
			echo '<ul class="listing-buy">';
			do{
				echo '<li><div class="listinfo"> <img src="'.$row['URLImagen'].'" width="100" height="55" class="listingimage" />';
				echo '<h3>'.$row['Producto'].'</h3>';
				echo '<p>'.$row['Descripcion'].'</p>';
				echo '<span class="price">Precio: '.$row['Precio'].'</span>';
				echo '<span class="media"> <img src="images/comment.png" width="19" height="15" />'.$row['Comentarios'].' </span>';
				echo '</div>';
				echo '<span class="listingbtns"> <a href="producto.php?id='.$row['IdProducto'].'&pag=1">Detalles</a></span>';
				echo '<span class="listbuttons">'.$row['Disposicion'].'</span>';
				echo '<div class="clear">&nbsp;</div></li>';					
			}while($row = mysql_fetch_array($result));
		} else 
			echo "No se encontraron vehículos</b>";
		$totalRegistros = totalProductosComprarOAlquilar($disposicion);
		$totalPaginas = ceil($totalRegistros / $registrosPagina);
		for ($i = 1; $i <= $totalPaginas; $i++)
			echo " |<strong><a href='".$disposicion.".php?pag=$i'>$i</a></strong>|";
}

function totalProductos(){
	$tablaProductos= mysql_query("select * from productos") or die ("totalProductos :: Error en la base de datos.");
	return mysql_num_rows($tablaProductos);
}

function imprimirCatalogo(){
		if(!isset($_GET['pag']))
			$pag = 1;
		else
			$pag = $_GET['pag'];
		$registrosPagina = 10;
		if($pag == 1)
			$listaInicio = 0;
		else
			$listaInicio = $registrosPagina * ($pag - 1);		
		$result= mysql_query("select * FROM productos ORDER BY FechaCreacion DESC LIMIT $listaInicio, $registrosPagina") or die ("imprimirCatalogo :: Error en la base de datos.");
		$total= mysql_num_rows($result);
		if ($row = mysql_fetch_array($result)){
			echo '<ul class="listing-buy">';
			do{
				echo '<li><div class="listinfo"> <img src="'.$row['URLImagen'].'" width="100" height="55" class="listingimage" />';
				echo '<h3>'.$row['Producto'].'</h3>';
				echo '<p>'.$row['Descripcion'].'</p>';
				echo '<span class="price">Precio: '.$row['Precio'].'</span>';
				echo '<span class="media"> <img src="images/comment.png" width="19" height="15" />'.$row['Comentarios'].' </span>';
				echo '</div>';
				echo '<span class="listingbtns"> <a href="producto.php?id='.$row['IdProducto'].'&pag=1">Detalles</a></span>';
				echo '<span class="listbuttons">'.$row['Disposicion'].'</span>';
				echo '<div class="clear">&nbsp;</div></li>';					
			}while($row = mysql_fetch_array($result));
		} else 
			echo "No se encontraron vehículos</b>";
		$totalRegistros = totalProductos();
		$totalPaginas = ceil($totalRegistros / $registrosPagina);
		for ($i = 1; $i <= $totalPaginas; $i++)
			echo " |<strong><a href='catalogo.php?pag=$i'>$i</a></strong>|";
}

function UltimosAñadidosComprarOAlquilar($disposicion){
	$tablaProductos= mysql_query("select * from productos WHERE Disposicion ='".$disposicion."' ORDER BY FechaCreacion DESC Limit 5") or die ("UltimosAñadidosComprarOAlquilar :: Error en la base de datos.");
	while($row = mysql_fetch_array($tablaProductos)) {
		echo '<li><div class="listinfo"> <img src="'.$row['URLImagen'].'" width="100" height="55" class="listingimage" />';
		echo '<h3>'.$row['Producto'].'</h3>';
		echo '<p>'.$row['Descripcion'].'</p>';
		echo '<span class="price">Precio: '.$row['Precio'].'</span>';
		echo '<span class="media"> <img src="images/comment.png" width="19" height="15" />'.$row['Comentarios'].' </span>';
		echo '</div>';
		echo '<span class="listingbtns"> <a href="producto.php?id='.$row['IdProducto'].'&pag=1">Detalles</a></span>';
		echo '<span class="listbuttons">'.$row['Disposicion'].'</span>';
		echo '<div class="clear">&nbsp;</div></li>';
	}
}

function totalComentarios($id){
	$tablaComentarios= mysql_query("select * from comentarios WHERE IdProducto='".$id."'") or die ("totalComentarios :: Error en la base de datos.");
	return mysql_num_rows($tablaComentarios);
}

function imprimirComentarios($id){
	if(!isset($_GET['pag']))
		$pag = 1;
	else
		$pag = $_GET['pag'];
	$registrosPagina = 10;
	if($pag == 1)
		$listaInicio = 0;
	else
		$listaInicio = $registrosPagina * ($pag - 1);
	$tablaComentarios= mysql_query("select * from comentarios WHERE IdProducto='".$id."' ORDER BY IdComentario DESC LIMIT $listaInicio, $registrosPagina") or die ("imprimirComentarios :: Error en la base de datos.");
	while($row = mysql_fetch_array($tablaComentarios)){
		echo'<div id="headings">';
		echo '<p><div class="content">';
		echo '<span class="fecha">'.$row['Fecha'].'</span>';
		echo '<span class="autor"> '.$row['Autor'].'</span>';
		echo '<p><span class="article-body">'.$row['Comentario'].'</span></p></br>';
		echo '<div class="comment_box"></div>';
		echo '</div></p></div>';
	}
	$totalRegistros = totalComentarios($id);
	$totalPaginas = ceil($totalRegistros / $registrosPagina);
	for ($i = 1; $i <= $totalPaginas; $i++)
		echo " |<strong><a href='producto.php?id=$id&pag=$i'>$i</a></strong>|";
}

function getDatosUsuario($dato){
	$tablaUsuario= mysql_query('select '."$dato".' from usuarios WHERE Email="'.$_SESSION['Email'].'"') or die ("getDatosUsuario :: Error en la base de datos.");
	$row = mysql_fetch_array($tablaUsuario);
	return $row[$dato];
}

function totalBuscar($buscar){
	$tablaComentarios= mysql_query("select * FROM productos WHERE Producto LIKE  '%$buscar%' OR Tipo LIKE  '%$buscar%' OR Disposicion LIKE  '%$buscar%' OR Kms LIKE  '%$buscar%' OR Antiguedad LIKE  '%$buscar%' OR Carroceria LIKE  '%$buscar%' OR Equipacion LIKE  '%$buscar%' OR Version LIKE  '%$buscar%' OR Descripcion LIKE  '%$buscar%' OR Precio LIKE  '%$buscar%' OR Modelo LIKE  '%$buscar%' OR Combustible LIKE  '%$buscar%' OR Estado LIKE  '%$buscar%' OR Cambio LIKE  '%$buscar%' OR Color LIKE  '%$buscar%' OR URLImagen LIKE  '%$buscar%' OR Comentarios LIKE  '%$buscar%' OR FechaCreacion LIKE  '%$buscar%' OR Usuario") or die ("totalBuscar :: Error en la base de datos.");
	return mysql_num_rows($tablaComentarios);
}

function busqueda(){
		 $buscar = htmlentities($_GET['busq_todo']);
	if(!empty($buscar))
	{
		if(!isset($_GET['pag']))
			$pag = 1;
		else
			$pag = $_GET['pag'];
		$registrosPagina = 10;
		if($pag == 1)
			$listaInicio = 0;
		else
			$listaInicio = $registrosPagina * ($pag - 1);		
		$result= mysql_query("select * FROM productos  WHERE Producto LIKE  '%$buscar%' OR Tipo LIKE  '%$buscar%' OR Disposicion LIKE  '%$buscar%' OR Kms LIKE  '%$buscar%' OR Antiguedad LIKE  '%$buscar%' OR Carroceria LIKE  '%$buscar%' OR Equipacion LIKE  '%$buscar%' OR Version LIKE  '%$buscar%' OR Descripcion LIKE  '%$buscar%' OR Precio LIKE  '%$buscar%' OR Modelo LIKE  '%$buscar%' OR Combustible LIKE  '%$buscar%' OR Estado LIKE  '%$buscar%' OR Cambio LIKE  '%$buscar%' OR Color LIKE  '%$buscar%' OR URLImagen LIKE  '%$buscar%' OR Comentarios LIKE  '%$buscar%' OR FechaCreacion LIKE  '%$buscar%' OR Usuario  ORDER BY IdProducto DESC LIMIT $listaInicio, $registrosPagina") or die ("Busqueda :: Error en la base de datos.");
		$total= mysql_num_rows($result);
		echo "<h1>Resultados para: <b>$buscar</b></h1>";
		if ($row = mysql_fetch_array($result)){
			echo '<ul class="listing-buy">';
			do{
				echo '<li><div class="listinfo"> <img src="'.$row['URLImagen'].'" width="100" height="55" class="listingimage" />';
				echo '<h3>'.$row['Producto'].' '.$row['Modelo'].'</h3>';
				echo '<p>'.$row['Descripcion'].'</p>';
				echo '<span class="price">Precio: '.$row['Precio'].'</span>';
				echo '<span class="media"> <img src="images/comment.png" width="19" height="15" />'.$row['Comentarios'].' </span>';
				echo '</div>';
				echo '<span class="listingbtns"> <a href="producto.php?id='.$row['IdProducto'].'&pag=1">Detalles</a></span>';
				echo '<span class="listbuttons">'.$row['Disposicion'].'</span>';
				echo '<div class="clear">&nbsp;</div></li>';				
			}while($row = mysql_fetch_array($result));
			echo "<p>Resultados: $total</p></url>";
		} else 
			echo "No se encontraron resultados para: <b>$buscar</b>";
		$totalRegistros = totalBuscar($buscar);
		$totalPaginas = ceil($totalRegistros / $registrosPagina);
		for ($i = 1; $i <= $totalPaginas; $i++)
			echo " |<strong><a href='resultadoBusqueda.php?pag=$i&busq_todo=$buscar'>$i</a></strong>|";
	}
}

function getDatosProducto($id,$sacar){
	$tablaProductos= mysql_query('select '."$sacar".' from productos WHERE IdProducto="'.$id.'"') or die ("getDatosProducto :: Error en la base de datos.");
	$row = mysql_fetch_array($tablaProductos);
	return $row[$sacar];
}

function imprimirProducto($id){
	$producto =getDatosProducto($id,'Producto');
	$tablaProductos= mysql_query("select * from productos WHERE IdProducto ='$id'") or die ("imprimirProducto :: Error en la base de datos.");
	while($row = mysql_fetch_array($tablaProductos)) {
		echo '<li><div class="listinfo"> <img src="'.$row['URLImagen'].'" width="350" height="250" class="listingimage" />';
		echo '<span class="detalles">Modelo: '.$row['Modelo'].'</span>';
		echo '<span class="detalles">Versión: '.$row['Version'].'</span>';

		echo '<span class="detalles">Kms realizados: '.$row['Kms'].'</span>';
		echo '<span class="detalles">Antiguedad: '.$row['Antiguedad'].'</span>';
		echo '<span class="detalles">Carroceria: '.$row['Carroceria'].'</span>';

		echo '<span class="detalles">Combustible: '.$row['Combustible'].'</span>';
		echo '<span class="detalles">Estado: '.$row['Estado'].'</span>';
		echo '<span class="detalles">Cambio: '.$row['Cambio'].'</span>';
		echo '<span class="detalles">Color: '.$row['Color'].'</span>';
		echo '<span class="detalles">Precio: '.$row['Precio'].'</span>';
		echo '<span class="detalles">Propietario: '.$row['Usuario'].'</span>';
		echo '<span class="descripcion">Descripción: '.$row['Descripcion'].'</span>';
		echo '<span class="detalles">Equipacion: '.$row['Equipacion'].'</span>';
		echo '</div>';
		if (!isset($_SESSION['Email']))
			echo 'Necesiats estar logeado para poder '.$row['Disposicion'].'!!!';
		else
			echo '<span class="listingbtns" id="detalles"> <a href="modulos/procesarComprarAlquilar.php?id='.$row['IdProducto'].'&propietario='.$row['Usuario'].'&producto='.$producto.'&accion='.$row['Disposicion'].'&pag=1">'.$row['Disposicion'].'</a></span>';
		echo '<div class="clear">&nbsp;</div></li>';
	}
}

function mostrarMensajeria(){
$us = getDatosUsuario('Usuario');
$id = $_GET['id'];
$msj = @$_GET['msj'];

switch($id){
	case 0: //bandeja de entrada
		$bandeja = mysql_query("SELECT * FROM mensajeria WHERE destinatario = '$us' ORDER BY IdMensajeria") or die("Error :: bandeja de entrada");
		if(0 < mysql_num_rows($bandeja))
		{
			while($row = mysql_fetch_array($bandeja))
			{
				echo "<table align='center' border='0'>";
				echo "<tr><td>Remitente:</td><td>$row[1]</td></tr>";
				echo "<tr><td>Asunto:</td><td>$row[3]</td></tr>";
				echo "<tr><td>Fecha:</td><td>$row[5]</td></tr>";
				echo "<tr><td>Mensaje:</td><td>$row[4]</td></tr>";
				echo "</table><center><a href='modulos/procesarMensajeria.php?id=0&msj=$row[0]'>Borrar Mensaje</a></center><br>";
			}
		}
		else
			echo "<center>No hay mensajes en la bandeja de entrada</center>";
		break;
	case 1: //elementos enviados
		$enviados = mysql_query("SELECT * FROM mensajeriaenviados WHERE remitente = '$us' ORDER BY IdMensajeriaEnviados") or die("Error :: elementos enviados");
		if(mysql_num_rows($enviados) > 0)
		{
			while($row = mysql_fetch_array($enviados))
			{
				echo "<table align='center' border='0'>";
				echo "<tr><td>Para:</td><td>$row[2]</td></tr>";
				echo "<tr><td>Asunto:</td><td>$row[3]</td></tr>";
				echo "<tr><td>Fecha:</td><td>$row[5]</td></tr>";
				echo "<tr><td>Mensaje:</td><td>$row[4]</td></tr>";
				echo "</table><center><a href='modulos/procesarMensajeria.php?id=1&msj=$row[0]'>Borrar Mensaje</a></center><br>";
			}
		}
		else
			echo "<center>No existen elementos enviados</center>";
		break;
	}
}
			
function getIP()
{
	if( isset( $_SERVER['HTTP_X_FORWARDED_FOR'] )) $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	else if( isset( $_SERVER ['HTTP_VIA'] ))  $ip = $_SERVER['HTTP_VIA'];
	else if( isset( $_SERVER ['REMOTE_ADDR'] ))  $ip = $_SERVER['REMOTE_ADDR'];
	else $ip = null ;
	return $ip;
}
	
function encriptacion($a_encriptar)
{
	$encriptado = md5($a_encriptar);
	return $encriptado;
}
?>