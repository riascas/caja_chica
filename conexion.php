<?php

$servername = "localhost";
$database = "gred2";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Conexion exitosa";



?>

<?php 
 class Conexion extends PDO { 
   private $tipo_de_base = 'mysql';
   private $host = 'localhost';
   private $nombre_de_base = 'gred2';
   private $usuario = 'root';
   private $contrasena = ''; 
   public function __construct() {
      //Sobreescribo el método constructor de la clase PDO.
      try{
         parent::__construct($this->tipo_de_base.':host='.$this->host.';dbname='.$this->nombre_de_base, $this->usuario, $this->contrasena);
      }catch(PDOException $e){
         echo 'Ha surgido un error y no se puede conectar a la base de datos. Detalle: ' . $e->getMessage();
         exit;
      }
   } 
  public function buscarUsuarioPorEmailyPass($email,$contrasena){
      $stmt = $this->query("SELECT * FROM usuarios WHERE email='$email' AND contrasena='$contrasena'" );
      return $stmt->fetch();
  }
public function obtener_tipo_ingresos(){
      $tipo_ingreso = $this->query("SELECT * FROM TIPO_INGRESOS");
      return $tipo_ingreso->fetchAll();

}
public function obtener_tipo_gastos(){
      $tipo_gasto = $this->query("SELECT * FROM TIPO_GASTO");
      return $tipo_gasto->fetchAll();

}

public function insertarIngreso( $importe,$idingreso ,$fecha, $descripcion){
/* quede ac

      $tipo_gasto = $this->query(" * FROM TIPO_GASTO");
      return $tipo_gasto->fetchAll();
      */

}

  

 } 
?>



