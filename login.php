<?php
//require 'conexion.php';
require_once 'conexion.php';
$conexion = new Conexion();

$email= $_POST['email'];

//$contrasena= md5($_POST['contrs']);
$contrasena= $_POST['contrs'];

$consulta2 = $conexion->buscarUsuarioPorEmailyPass($email,$contrasena);
if(is_array($consulta2)){
    echo $consulta2['EMAIL']." ".$consulta2['DNI'];

    session_start();
    $_SESSION['email']=$email;
    $_SESSION['dni']=$consulta2['DNI'];

    echo "LLegue";
    header("Location: home.php");   
}else{

    echo "Los datos son incorrectos";
}
?>