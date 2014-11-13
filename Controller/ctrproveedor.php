<?php 

require ("../Config/Config.php");
require ("../Library/timoti_bd.php");
require ("../Model/DAO/DAO_proveedor.php");

$encriptar = new encriptar();
$proveedor = new proveedor();

if (isset($_POST["btn_registro"])) {

	$proveedor = new proveedor();

	$proveedor->set_razonsocial($_POST["txtrazon"]);
	$proveedor->set_nit($_POST["txtidenti"]);
	$proveedor->set_nombre($_POST["txtnom"]);
	$proveedor->set_mail($_POST["txtmail"]);	
	$proveedor->set_tel($_POST["txttel"]);
	$proveedor->set_cel($_POST["txtcel"]);

	$res = $proveedor->identificacion();

	try {
		if (count($res) > 0) {

			$iden = $res[0]['Identificacion'];

			if ($iden == $_POST["txtidenti"]) {
				echo "<script>
				alert('El proveedor ya se encuentra registrado.');
			</script>";
		}
	}	
	if($proveedor->registro()){
		echo "<script>
		alert('El proveedor se ha guardado con éxito.');
	</script>";
}else{
	echo "<script>
	alert('Error en guardar el proveedor');
</script>";
}
}catch(Exception $e){
	echo $e->getMessage();
}
}
$idmar="";
$nom="";
$correo="";
$tel="";
$cel="";
$nit="";
$campos="";

if(isset($_GET["txtidenti"])){

	$proveedor->set_nit($encriptar->decrypt($_GET["txtidenti"]));

	foreach ($proveedor->mostrar_proveedor() as $value) {
		
		$idmar =$value["Id_Marca"];
		$nom =$value["Nom_pro"];
		$correo =$value["Correo"];
		$tel =$value["Telefono"];
		$cel =$value["Celular"];
		$nit =$value["Identificacion"];

		$campos .="<script> campos(".$value["Id_Marca"].") </script>";
	}	
}
if (isset($_POST["btn_actu"])) {

	$proveedor = new proveedor();

	$proveedor->set_razonsocial($_POST["txtrazon"]);
	$proveedor->set_nit($_POST["txtidenti"]);
	$proveedor->set_nombre($_POST["txtnom"]);
	$proveedor->set_mail($_POST["txtmail"]);	
	$proveedor->set_tel($_POST["txttel"]);
	$proveedor->set_cel($_POST["txtcel"]);
	
	try{
		if($proveedor->actualizar()){
			echo "<script>
			alert('El proveedor se ha actualizado con éxito.');
		</script>";
	}else{
		echo "<script>
		alert('Error al actualizar el proveedor.');
	</script>";
}
}catch(Exception $e){
	echo $e->getMessage();
}
}

$mar="";
foreach ($proveedor->llenarcombomarca() as $value) {
	$mar .="<option value='".$value["Id_Marca"]."'>".$value["Descripcion"]."</option>";
}


define("URLCONTROLLER", 'proveedor.php');
include '../View/header.php';
?>