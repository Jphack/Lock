<?php
require ("../Config/Config.php");
require ("../Library/timoti_bd.php");
require ("../Model/DAO/DAO_login.php");

	session_start();
	$_SESSION['username'] = array();
	session_destroy();
	header("location: ctrindex.php");
?>