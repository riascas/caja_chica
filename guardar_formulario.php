<?php
require 'conexion.php';
//Formulario registro
$nombre= $_POST['nombre'];
$apellido= $_POST['apellido'];
$dni= $_POST['dni'];
$contrs= $_POST['contrs'];
$contrs2=$_POST['contrasenia'];
$email= $_POST['email'];
$aleatorio = uniqid();
  $contenido_html =  "<!--Copia desde aquí-->
<table style='max-width: 600px; padding: 10px; margin:0 auto; border-collapse: collapse;'>  
  <tr>
    <td style='background-color: rgba(0, 0, 0, 0.4);border-radius: 15px'>
      <div style='color: #d8d8d8; margin: 4% 10% 2%; text-align: justify;font-family: sans-serif'>
        <h2 style='color: #006633; margin: 0 0 7px'>Correo de activación</h2>
        <p style='margin: 2px; font-size: 15px'>
          Recientemente has registrado tu nueva cuenta en GRED. BIENVENIDO!<br>
          Estas a un último paso de terminar tu registro. Para activar tu cuenta, hacé click <a href='localhost/gred3/correo/activacion.php?id=$aleatorio'>acá</a>.<br>
        </p>  
        </div>
        <p style='color: #b3b3b3; font-size: 12px; text-align: center;margin: 30px 0 0'>GRED Lo hace fácil. 2018</p>
      </div>
    </td>
  </tr>
</table>
<!--hasta aquí-->";
//$contrasenia=$_POST['contrasenia']; este es el formulario de registro
$sql = "INSERT INTO usuarios ( nombre ,apellido, dni, contrasena, email, id_confirmado, id_unico) VALUES ('$nombre','$apellido','$dni','$contrs', '$email', 0, '$aleatorio')";
if ($contrs!=$contrs2) {
  echo "<script>alert('Las contraseñas no coinciden.');window.location.href='formulario.php';</script>";
}
else{
  $checkdni = mysqli_query($conn,"SELECT dni FROM usuarios WHERE dni='$dni'"); 
  $dni_exist = mysqli_num_rows($checkdni); 
  $checkemail = mysqli_query($conn,"SELECT email FROM usuarios WHERE email='$email'"); 
  $email_exist = mysqli_num_rows($checkemail);
  if ($email_exist>0) { 
            echo "<script>alert('El Email está en uso. Por favor, introducí un email diferente.');window.location.href='formulario.php';</script>"; 
             
  }else{
    if($dni_exist>0){
      echo("<script>alert('Ahora tenés más de una cuenta en GRED, y podrás manejar dos sueldos simultaneamente. Si no es lo que buscabas, dirigite, en la pantalla principal, a tu MAIL, luego a PERFIL, y luego ELIMINAR CUENTA.');</script>");
      if (mysqli_query($conn, $sql)) {
      $mensaje="";
      include('correo/envioCorreo.php');
        $email = new email("Gabriel","gabrielpereyra1997@gmail.com","156737353842720521");
        $email->agregar($_POST['email']);
              
        if ($email->enviar('Activación de tu cuenta GRED',$contenido_html)){
                
            $mensaje= 'Mensaje enviado';
            echo $mensaje;    
        }else{
                 
           $mensaje= 'El mensaje no se pudo enviar';
           $email->ErrorInfo;
           echo $mensaje; 
        }    
      echo "<script>alert('Te registraste correctamente. Consultá tu mail para obtener el link de activación de tu cuenta.');window.location.href='pantalla_login.php';</script>"; 
      }
      else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      } 
    }
    else{
      if (mysqli_query($conn, $sql)) {
      $mensaje="";
      include('correo/envioCorreo.php');
        $email = new email("Gabriel","gabrielpereyra1997@gmail.com","156737353842720521");
        $email->agregar($_POST['email']);
              
        if ($email->enviar('Activación de tu cuenta GRED',$contenido_html)){
                
            $mensaje= 'Mensaje enviado';
            echo $mensaje;    
        }else{
                 
           $mensaje= 'El mensaje no se pudo enviar';
           $email->ErrorInfo;
           echo $mensaje; 
        }    
      echo "<script>alert('Te registraste correctamente. Consultá tu mail para obtener el link de activación de tu cuenta.');window.location.href='pantalla_login.php';</script>"; 
      }
      else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      } 
    }        
  }
}
  
mysqli_close($conn);

//form para guardar saldos 
/* $saldo= $_POST['importe'];
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

-->*/
