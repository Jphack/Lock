<?php 

require ("../Config/Config.php");
require ("../Library/timoti_bd.php");
require ("../Model/DAO/DAO_proveedor.php");

$encriptar = new encriptar();
$proveedor = new proveedor();

$tabla = "";
foreach ($proveedor->mostrar() as $value) {
	$tabla .="<tr>";
	$tabla .="<td>".$value["Id_Marca"]."</td>";
	$tabla .="<td>".$value["Identificacion"]."</td>";
	$tabla .="<td>".$value["Nom_pro"]."</td>";
	$tabla .="<td>".$value["Correo"]."</td>";
	$tabla .="<td>".$value["Telefono"]."</td>";
	$tabla .="<td>".$value["Celular"]."</td>";
	$tabla .="<td><a href='ctrproveedor.php?txtidenti=".$encriptar->encrypt($value["Identificacion"])."'>Modificar</a></td>";
	$tabla .="</tr>";
}

define("URLCONTROLLER", 'proveedorconsul.php');
include '../View/header.php';
?>