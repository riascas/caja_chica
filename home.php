<!DOCTYPE html>
<html lang="en">
<?php session_start();
require_once 'conexion.php';
$conexion = new Conexion();
$tipo_ingreso =  $conexion->obtener_tipo_ingresos();
$tipo_gasto = $conexion->obtener_tipo_gastos();
?>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <title>GRED</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

       <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/home.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="/logo.ico" />
    <style>
    body {
      margin:0px;
      background-image:url('img/header.jpg');
      background-position:center center;
      background-repeat:no-repeat;
      background-attachment:fixed;
      background-size:cover;
    }
  </style>

</head>

<body>
<div id="wrapper">
<!-- Navigation -->
<nav class="dropdown" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
        </button>       
    </div>
    <!-- /.navbar-header -->

      <!-- /.dropdown-alerts -->
      <ul>
            </li>
                        <!-- /.dropdown -->
                        <li class="navbar navbar-default navbar-static-top" style="background-color: rgba(0,0,0,0.4);border-radius: 15px;margin-left: -35px; margin-top: 5px">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                                </a>
                                <i class="text-muted">Bienvenido: <?= $_SESSION['email']?></i>
                                <img src="img/logobanner.png" style="float: right;width: 10%;height: 5%;margin-top: -40px">
                           
                            <ul class="dropdown-menu dropdown-user">
                                <li class="divider"></li>
                                <li><a href="log_out.php"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
                                </li>
                            </ul>
                            <!-- /.dropdown-user -->
                        </li>
                        <!-- /.dropdown -->
            </li>
        </ul> 
        <h1 class="page-header" style="text-align: center;color:white">Bienvenido al Menú de ingresos y gastos</h1>

        <h3 style="text-align: center;color:white">Cargá tus ingresos o tus gastos abajo</h3>
        <div class="container" style="width: 100%;height: 100%">
            <div class="row">
                <div class="col-lg-6">
                    <form action="actions.php" method="POST">
                                <input name="action" type="hidden" value="insertar_ingreso">

                                    <div class="form-group" style="width: 50%;height: 100%;float: left;text-align: center;margin-left: 33%;background-color: rgba(0, 0, 0, 0.4);border-radius: 15px">
                                        <div class="form-group">
                                            <label class="text-muted">Incorpore sus ingresos</label>
                                            <input name="ingreso" type="number" class="form-control" required>
                                         </div>  
                                         <div class="form-group">  
                                            <label class="text-muted">Seleccione el tipo de ingreso</label>
                                            <select name="idingreso" class="form-control">
                                                <option value="" ></option>
                                                <?php foreach ($tipo_ingreso as $row) { ?>
                                                    <option value="<?php echo $row['ID_TIPO_INGRESOS']; ?>"><?php echo $row['NOMBRE']; ?></option>
                                                 <?php } ?>
                                            </select>
                                            <label class="text-muted">Descripcion</label><br>
                                            <input type="text" name= "descripcion" placeholder="Ingrese una descripcion del ingreso"><br>
                                            <label class="text-muted">Fecha</label><br>
                                            <input type="date" name= "fecha" required>
                                            <br><br>
                                            <div class="form-group"> 
                                                 <input type="submit" class="btn btn-success" value="Cargar ingreso">
                                            </div>
                                    </div>
                                    </div>
                                </div>
                                    </form>                                    
                                    <form action="actions.php" method="POST">
                                    <input name="action" type="hidden" value="insertar_gastos">
                                    <div class="form-group" style="width: 25%;height: 100%;float: right;text-align: center;margin-right: 15%;background-color: rgba(0, 0, 0, 0.4);border-radius: 15px">
                                        <div class="form-group">
                                            <label class="text-muted">Inserte sus gastos</label>
                                            <input name="gastos" type="number" class="form-control" required>
                                         </div>  
                                        <div class="form-group">
                                            <label class="text-muted">Seleccione el tipo de gasto</label>
                                            <select name="gasto_nombre" class="form-control">
                                                <option value="" ></option>
                                                <?php foreach ($tipo_gasto as $row) { ?>
                                                    <option value="<?php echo $row['ID_TIPO_GASTO']; ?>"><?php echo $row['NOMBRE']; ?></option>
                                                 <?php } ?>
                                            </select>
                                            <label class="text-muted">Descripcion</label> <br>
                                                <input type="text" name= "descripcion" placeholder="Ingrese una descripcion del gasto"><br>
                                            <label class="text-muted">Fecha</label> <br>
                                                <input type="date" name= "fecha" required>
                                                <br><br>
                                            <div class="form-group" >
                                            <a class="btn btn-success">Ingrese gastos</a>
                                             </div>
                                          </div>  
                                        </div>                                       
                                     </div> 
                    
                    </form> 
                </div>    

            </div>
                <!-- /.col-lg-12 -->
        </div>
            <!-- /.row -->
            <div class="row" style="margin-left: auto;margin-right: auto ;width: 95%;background-color: rgba(0, 0, 0, 0.4);border-radius: 15px">
            <h1 class="col-lg-12" style="color: grey;text-align: center;">Esta es tu economía</h1>
                <div class="col-lg-12">                  
                        <div class="progress">
                          <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
                             aria-valuemin="0" aria-valuemax="100" style="width:40%">
                          40% Complete (success)
                         </div>
                        </div>
                    <!-- /.panel -->
                </div>
                <div class="col-lg-12">
                <div class="progress">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
                     70% Complete (danger)
                </div>
            </div>



                </div>
             
                   
            </div>
                  
                </div>
              
                       <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- 
                        <div class="panel-body">
                            <p>Morris.js is a jQuery based charting plugin created by Olly Smith. In SB Admin, we are using the most recent version of Morris.js which includes the resize function, which makes the charts fully responsive. The documentation for Morris.js is available on their website, <a target="_blank" href="http://morrisjs.github.io/morris.js/">http://morrisjs.github.io/morris.js/</a>.</p>
                            <a target="_blank" class="btn btn-default btn-lg btn-block" href="http://morrisjs.github.io/morris.js/">View Morris.js Documentation</a>
                        </div>
                      /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->



    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>


    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

</body>

</html>