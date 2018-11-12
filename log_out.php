<?php
	require_once  'conexion.php';
	session_start();
	$email= $_SESSION['email'];
	$sql="UPDATE usuarios SET id_sesion=0 WHERE email='$email'";
	mysqli_query($conn, $sql);
	session_destroy();
	header("Location: pantalla_login.php");
?>