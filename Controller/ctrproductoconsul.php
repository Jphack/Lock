<?php 

require ("../Config/Config.php");
require ("../Library/timoti_bd.php");
require ("../Model/DAO/DAO_productos.php");

$producto =new productos();
$tabla = "";
foreach ($producto->mostrardetalle() as $value) {
	$tabla .="<tr>";
	$tabla .="<td>".$value["Id_productos"]."</td>";
	$tabla .="<td>".$value["Descripcion"]."</td>";
	$tabla .="<td>".$value["Valor"]."</td>";
	$tabla .="<td>".$value["Cantidad"]."</td>";
	$tabla .="<td>".$value["Id_marca"]."</td>";
	$tabla .="<td><a>Modificar</a></td>";
	$tabla .="</tr>";
}


define("URLCONTROLLER", 'productoconsul.php');
include '../View/header.php';
?>