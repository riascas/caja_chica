<?php
require 'conexion.php';
//Formulario registro
$nombre= $_POST['nombre'];
$apellido= $_POST['apellido'];
$dni= $_POST['dni'];
$contrs= $_POST['contrs'];
$email= $_POST['email'];
//$contrasenia=$_POST['contrasenia']; este es el formulario de registro
$sql = "INSERT INTO usuarios ( nombre ,apellido, dni, contrasena, email) VALUES ('$nombre','$apellido','$dni','$contrs', '$email')";
if (mysqli_query($conn, $sql)) {
    header('Location: pantalla_login.php');
    
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

//form para guardar saldos 
 $saldo= $_POST['importe'];
 $fecha= $_POST['fecha'];
 $tipo_ingreso= $_POST['tipo_ingreso'];

 $sql1="INSERT INTO ingresos (importe, fecha_ingreso, descripcion) VALUES ('$saldo','$fecha')";
 
 //query para levantar tipo de saldos
 $sql2="SELECT * FROM TIPO_INGRESO";
 $rec= mysql_query($sql2);
      while ($row=mysql_fetch_array($rec))
      {
            echo "<option>";
            echo $row['nombre'];
            echo "<option>";
      }

?>

<!--
            //obtenemos los valores del formulario

-->
