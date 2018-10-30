<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulario Login</title>
 
    <!-- CSS de Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css"> <!--Iconos--> 
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500" >
    <link rel="stylesheet" href="css/custom.css">
    <link rel="shortcut icon" href="/logo.ico" />
  </head>

  <body>      
    <div class="my-content" >
        <div class="container" > 
            <div class="row">
                <div class="col-sm-12" >
                  <h1><strong>Registrate en GRED</strong></h1>
                </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-md-6 col-sm-offset-3">
                  <div class="container-fluid">
                    <div class="panel panel-success">
                      <div class="panel-heading">
                        <h3 class="panel-title">Formulario de registro</h3>
                      </div>
                      <div class="panel-body">
                        <form action="guardar_formulario.php" method="POST">
                   
                                <div class="form-group col-md-6">
                                  <label class="text-muted" for="">Nombre</label>
                                  <input type="text" class="form-control" name="nombre" placeholder="Ingrese nombre" required>
                                </div>
                                <div class="form-group col-md-6">
                                  <label class="text-muted">Apellido</label>
                                  <input type="text" class="form-control" name="apellido" placeholder="Ingrese apellido" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="text-muted">DNI</label>
                                    <input type="number" class="form-control" name="dni" placeholder="Ingrese DNI" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="text-muted">E-mail</label>
                                    <input type="email" class="form-control" name="email" placeholder="Ingrese email" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="text-muted">Contraseña</label>
                                    <input type="password" class="form-control" name="contrasenia"  placeholder="*************" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="text-muted">Confirme contraseña</label>
                                    <input type="password" class="form-control" name="contrs" placeholder="*************" required>
                                </div>
                                <div class="form-group col-md-12">
                                  <button class="btn btn-success pull-right" type="submit"  id="registro">Registrarse</button>
                                </div>
                        </form>
                      </div>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
          
                </div>
            </div>
        </div>
      </div>
<!--Modal
 
<div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<span aria-hidden="true">&times;</span>
			
				<h4 class="modal-title" id="myModalLabel">El registro fue exitoso</h4>
			</div>
			<div class="modal-body">
        <button type="submit" id="ingresar">Ingresar</button>
			</div>
		</div>
	</div>
</div>

   
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>    -->
      <script src="js/bootstrap.min.js"></script>
  </body>
</html>