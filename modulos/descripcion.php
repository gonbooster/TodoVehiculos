<?php
include_once('../core/conexion.php');
include_once('../core/functions.php');
$idDescripcion = $_GET['idDescripcion'];
switch($idDescripcion){
	case 0: // Buscar
		$descripcion="Escriba cualquier atributo que corresponda al vehículo que desee visualizar";
		break;
	case 1: // Tipo
		$descripcion="Escoga el tipo de producto que desea buscar";
		break;
	case 2: // Version
		$descripcion="Escriba la versión del producto a mostrar";
		break;
	case 3: // Provincia
		$descripcion="Escriba la provincia en donde desea que se encuentre el producto a buscar";
		break;	
	case 4: // Antiguedad
		$descripcion="Escriba la antiguedad del producto a buscar formato (dd/mm/aa)";
		break;
	case 5: // Precio
		$descripcion="Escriba el precio del producto (como separador entre cantidades de 3 cifras use . ejemplo: 1.000)";
		break;
	case 6: // Modelo
		$descripcion="Escriba el modelo del producto a buscar";
		break;
}
echo $descripcion;
?>