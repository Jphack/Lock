<?php 

require ("../Config/Config.php");
require ("../Library/timoti_bd.php");
require ("../Model/DAO/DAO_admin.php");

$administrador=new admin();
$cant_prove="";
$cant_produ="";
$cant_clien="";
//-------- cantidad proveedores
$cantprove = $administrador->cantidad_prove();
$cant_prove = $cantprove[0]["a"];
//-------- cantidad productos
$cantprodu = $administrador->cantidad_produc();
$cant_produ = $cantprodu[0]["b"];
//-------- cantidad clientes
$cantcliente = $administrador->cantidad_clien();
$cant_clien = $cantcliente[0]["c"];
//--------
define("URLCONTROLLER", 'inicio.php');
include '../View/header.php';
?>