<!DOCTYPE html>
<html lang="es">
  
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Log-in</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">    
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css"> <!--Iconos--> 
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500" rel="stylesheet">
    <link rel="stylesheet" href="css/custom.css">
  </head>
  <link rel="shortcut icon" href="/logo.ico" />

  
  <body>
    <div class="my-content" >
        <div class="container" > 

            <div class="container-fluid" > 
              <div class="col-sm-12" >
                  <h1 class="text-success"> <strong>Bienvenido a GRED! </strong>
              </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="container-fluid">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Login Gred</h3>
                            </div>
                            <div class="panel-body">
                                <form action="login.php" method="POST">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label class="text-muted">Email</label>
                                            <input name="email" id="email" type="email" class="form-control" placeholder="Ingrese tu email" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="text-muted">Password</label>                                            
                                            <input name="contrs"id="contrasenia" type="password" class="form-control" placeholder="Ingresa tu contraseña" required>
                                        </div>                                       
                                        <div class="form-group" >
                                            <input type="submit"id="boton_ingresar" class="btn btn-success disabled">Ingresar</a>
                                        </div>
                                        <div class="form-group">
                                            <h3 class="text-muted">Aún no estas registrado?</h3>
                                        </div>
                                        <div class="form-group" >
                                                <a href="formulario.php" class="btn btn-success">Registrarme</a>
                                        </div>

                            
                                    </div>                                   
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="row">
                  <div class="col-sm-6 col-sm-offset-3 myform-cont" >
                     
                      <div class="myform-bottom">
                        <form role="form" action="" method="post" class="">
                          <div class="form-group">
                              <input type="text" name="form-username" placeholder="Usuario..." class="form-control" id="form-username">
                          </div>
                          <div class="form-group">
                              <input type="password" name="form-password" placeholder="Contraseña..." class="form-control" id="form-password">
                          </div>

                          <button type="submit" class="mybtn">Entrar</button>
                          </form>
                          <div class="row">

                <div class="col-sm-12 mysocial-login">
                    
                    <div class="mysocial-login-buttons" >
                      <h3> Aún no estás registrado?</h3>
                      <a type="submit" class="mybtn"register.html href="#">
                      <i class="fa fa-registrarse"></i>  <u>Registrarme</u>
                    </a>
                     <h3>...ingresa también por:</h3>

                      <a class="mybtn-social" href="##1087DD">
                      <i class="fa fa-facebook"></i> Facebook
                     </a>
                      <a class="mybtn-social" href="##DD4B39">
                      <i class="fa fa-google-plus"></i> Google Plus
                      </a>
                    </div>
                          
                        
                        </form>
                      </div>
                  </div>
            </div> -->
            
            

        </div>
    </div>

        <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
      <script src="js/login.js"></script>

  </body>

</html>