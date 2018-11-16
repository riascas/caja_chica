<?php
//require 'conexion.php';
require_once 'conexion.php';
$conexion = new Conexion();

$email= $_POST['email'];

//$contrasena= md5($_POST['contrs']);
$sql="UPDATE usuarios SET id_sesion=1 WHERE email='$email'";
$contrasena= $_POST['contrs'];
$consulta2 = $conexion->buscarUsuarioPorEmailyPass($email,$contrasena);
if ($consulta2['ID_CONFIRMADO']!=1){
	echo "<script>alert('Aún no has activado tu cuenta. Por favor, accede a tu mail para registrarte.');
	window.location.href='pantalla_login.php';</script>";
}
else{
	if(is_array($consulta2)){
	    echo $consulta2['EMAIL']." ".$consulta2['DNI'];

	    session_start();
	    $_SESSION['email']=$email;
	    $_SESSION['dni']=$consulta2['DNI'];
	    mysqli_query($conn, $sql);

	    echo "LLegue";
	    header("Location: home.php");   
	}else{

	    echo "Los datos son incorrectos";
	}
}
?>