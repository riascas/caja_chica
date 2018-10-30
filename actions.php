<?php

require_once 'conexion.php';
$conexion = new Conexion();

$action = $_POST["action"];

if($action=="insertar_usuario"){
    echo "insertar codigo que inserte usuario";
}else
if($action=="insertar_gastos"){
    echo "insertar codigo que inserte gastos";
}else
if($action=="insertar_ingreso"){
    echo "ejecutar codigo que inserte ingreso";
  //  http://localhost:81/gred/actions.php?action=insertar_ingreso&ingreso=20000&idingreso=1&descripcion=hjghjfgh&fecha=2018-10-23
   $importe = $_POST["ingreso"];
   $idingreso = $_POST["idingreso"];
   $fecha = $_POST["fecha"];
   $descripcion = $_POST["descripcion"];
    //primero valida que llegue todo
    $conexion->insertarIngreso( $importe,$idingreso ,$fecha, $descripcion);
}else{
    echo "no hubo action valida";
}

?>