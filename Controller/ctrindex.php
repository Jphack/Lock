<?php 

require ("../Config/Config.php");
require ("../Library/timoti_bd.php");
require ("../Model/DAO/DAO_login.php");

$usuario = new usuario();
$encriptar = new encriptar();

if (isset($_POST["btn_login"])){

	$usuario = new usuario();
	$usuario->set_contra($encriptar->encrypt($_POST["password"]));
	$usuario->set_mail($_POST["username"]);
	$res = $usuario->login_usu();

	$rol = $res[0]['Id_rol'];

	if (count($res) > 0) {

		if ($rol == '0') {
			
			session_start();
			$_SESSION['username']=$_POST ['username'];
			$_SESSION['img']=$res[0]['ruta'];
			$_SESSION['usuario']=$res[0]['Nombre'];
			header("location: ctringresoadmin.php");
		}
		else if ($rol == '1'){
			
			session_start();
			$_SESSION['username']=$_POST ['username'];
			$_SESSION['img']=$res[0]['ruta'];
			$_SESSION['usuario']=$res[0]['Nombre'];
			header("location: ctringresocli.php");
		}

	}else {
		header("location: ctrerror.php");
	}	
}

if (isset($_POST["btn_registro"])) {

	$usuario = new usuario();
	$usuario->set_nombre($_POST["txtnombre"]);
	$usuario->set_iden($_POST["txtidenti"]);
	$usuario->set_dir($_POST["txtdir"]);
	$usuario->set_mail($_POST["txtmail"]);	
	$usuario->set_tel($_POST["txttel"]);
	$usuario->set_barrio($_POST["txtbarrio"]);
	$usuario->set_contra($encriptar->encrypt($_POST["txtcontrasena"]));

	$res = $usuario->identificacion();
	
try {
	if (count($res) > 0) {

		$iden = $res[0]['Identificacion'];

		if ($iden == $_POST["txtidenti"]) {
			echo "<script>
			alert('El usuario ya se encuentra registrado.');
		</script>";
	}
}	
}catch(Exception $e){
	echo $e->getMessage();
}
try{
	if($usuario->registro()){
		echo "<script language='JavaScript' type='text/javascript'>
		alert('Registro guardado con éxito. Bienvenido a nuestro portal de Timoti, ahora puedes iniciar sesión.');
	</script>";
}else{
	echo "<script language='JavaScript' type='text/javascript'>
	alert('Error en guardar el registro');
</script>";
}
}catch(Exception $e){
	echo $e->getMessage();
}
}

include ("../View/index.php");
?>