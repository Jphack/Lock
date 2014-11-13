<?php 
require ("../Config/Config.php");
require ("../Library/timoti_bd.php");
require ("../Model/DAO/DAO_productos.php");
$producto = new productos();
$subcat="";
$producto->set_cat($_POST['q']);
foreach ($producto->subcategorias() as $value) {
	$subcat .="<option value='".$value["Id_sub_categoria"]."'>".$value["Nom_sub_categoria"]."</option>";
}
echo $subcat;
?>