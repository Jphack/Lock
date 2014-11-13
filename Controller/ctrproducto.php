<?php 

require ("../Config/Config.php");
require ("../Library/timoti_bd.php");
require ("../Model/DAO/DAO_productos.php");

$producto = new productos();

if (isset($_POST["btn_agre"])) {

	$producto = new productos();
	$producto->set_nompro($_POST["txtproducto"]);

	try{
		if($producto->agregarproducto()){
			echo "<script>
			alert('El producto se ha guardado con éxito.');
		</script>";
	}else{
		echo "<script language='JavaScript' type='text/javascript'>
		alert('Error en guardar el producto');
	</script>";
}
}catch(Exception $e){
	echo $e->getMessage();
}
}//termina el registro del producto

// inicio del detalle del producto
if (isset($_POST["btn_deta"]))
{

	$producto = new productos();
	$cont = $producto->codparaimg()[0][0];
	$cod = $cont + 1 ;
	$allowedExts = array("gif", "jpeg", "jpg", "png"); 
	$temp = explode(".", $_FILES["files"]["name"]); 
	$extension = end($temp);
	$nombre =  strtolower(trim($cod)).".".$extension;
	$imagen = false;

	if($_FILES["files"]["name"] != ""){
		if ((($_FILES["files"]["type"] == "image/gif")
			|| ($_FILES["files"]["type"] == "image/jpeg")
			|| ($_FILES["files"]["type"] == "image/jpg")
			|| ($_FILES["files"]["type"] == "image/pjpeg")
			|| ($_FILES["files"]["type"] == "image/x-png")
			|| ($_FILES["files"]["type"] == "image/png"))
			&& in_array($extension, $allowedExts)) {
			if ($_FILES["files"]["error"] > 0) {
				echo "Return Code: " . $_FILES["files"]["error"] . "<br>";
			} else {
				if (!file_exists("../Assets/img/catalogo/" . $nombre)) {
					move_uploaded_file($_FILES["files"]["tmp_name"],"../Assets/img/catalogo/" . $nombre);
					$imagen = true;
				}else{
					unlink("../Assets/img/catalogo/" . $nombre);
					move_uploaded_file($_FILES["files"]["tmp_name"],"../Assets/img/catalogo/" . $nombre);
					$imagen = true;
				}
			}
		} else {
			echo "Invalid file";
		}
	}else{
		$imagen = true;
	}

	$producto->set_precio($_POST["precio"]);
	$producto->set_des($_POST["des"]);
	$producto->set_nompro($_POST["prod"]);
	$producto->set_mar($_POST["marca"]);
	$producto->set_cat($_POST["catego"]);
	$producto->set_subcat($_POST["subcatego"]);
	$producto->setrutaDestino($nombre);

	try {
		if ($producto->agregardetalle()) {
			echo "<script language='JavaScript' type='text/javascript'>
			alert('El datalle de producto se ha ingresado.');
		</script>";
		
	}
	else{
		echo "<script language='JavaScript' type='text/javascript'>
		alert('Error al guardar el detalle del producto.');
	</script>";
}
}catch(Exception $e){
	echo $e->getMessage();
}
}//termina el datelle de producto
$nom="";
$cat="";
$mar="";
foreach ($producto->llenarcomboproductos() as $value) {
	$nom .="<option value='".$value["Id_Productos"]."'>".$value["Nombre_del_Producto"]."</option>";
}
foreach ($producto->categorias() as $value) {
	$cat .="<option value='".$value["Id_categoria"]."'>".$value["Nom_categoria"]."</option>";
}
foreach ($producto->llenarcombomarca() as $value) {
	$mar .="<option value='".$value["Id_Marca"]."'>".$value["Descripcion"]."</option>";
}

define("URLCONTROLLER", 'producto.php');
include '../View/header.php';
?>