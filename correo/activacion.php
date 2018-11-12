<?php
require '../conexion.php';
$aleatorio=$_GET['id'];
//Formulario registro
$sql = "UPDATE usuarios SET id_confirmado=1 where id_unico='$aleatorio'";

if (mysqli_query($conn, $sql)) {
    header('Location: activado.html');
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>