<?php
include "php/registro.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous" />
<link rel="icon" type="image/png" href="img/logo2.png" />
<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet" />
<link rel="stylesheet" href="css/estilos.css" />
<title>PcComp</title>
</head>
<body id="bg1">
<!-- modal -->

    <div class="container">
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Iniciar Sesión</h5>
                    </div>
                    <div class="modal-body">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Correo Electronico:</label>
                                <input type="text" class="form-control" name="email" id="recipient-name" placeholder="Correo Electronico..." />
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Contraseña:</label>
                                <input type="password" class="form-control" name="contrasena" id="password" placeholder="Contraseña..." />
                                <button class="btn btn-success" type="button" onclick="mostrarContraseña()">Ver</button>
                            </div>
                            <input type="checkbox" /> Recordar Correo Electronico<br>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                <button type="submit" class="btn btn-success" name="logear">Iniciar Sesión</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- fin modal -->

<!-- Modal Registro -->
    <div class="container">
    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <section class="form-register">
                        <h4>Formulario Registro</h4>
                        <br>
                        <form action="" method="POST">
                        <div class="form-group">
                            Nombre:
                            <input class="form-control" type="text" name="nombre" placeholder="Nombre..." />
                        </div>
                        <div class="form-group">
                            Apellidos:
                            <input class="form-control" type="text" name="apellidos" placeholder="Apellidos..." />
                        </div>
                        <div class="form-group">
                            Ciudad:
                            <input class="form-control" type="text" name="ciudad" placeholder="Ciudad..." />
                        </div>
                        <div class="form-group">
                            Población:
                            <input class="form-control" type="text" name="poblacion" placeholder="Población..." />
                        </div>
                        <div class="form-group">
                            Dirección:
                            <input class="form-control" type="text" name="direccion" placeholder="Dirección..." />
                        </div>
                        <div class="form-group">
                            Edad:
                            <input class="form-control" type="text" name="edad" placeholder="Edad..." />
                        </div>
                        <div class="form-group">
                            E-mail:
                            <input class="form-control" type="email" name="email" placeholder="E-mail..." id="email"/>
                            <span id="duplicado" class="hidden">El correo electronico esta en uso, utilice otro</span>
                        </div>
                        <div class="form-group">
                            Contraseña:
                            <input class="form-control" type="password" name="contrasena" id="password2" placeholder="Contraseña..." />
                            <button class="btn btn-success" type="button" onclick="mostrarContraseña2()">Ver</button>
                        </div>
                        <div class="form-group">
                            <p><input type="checkbox"/> Estoy de acuerdo con los Terminos y Condiciones</p>
                            <button class="btn btn-success" type="submit" name="registro" value="enviar" id="boton">Enviar</button>
                        <a href="index.php"><button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button></a>
                </form>
            </section>
        </div>
        </div>
    </div>
    </div>
    </div>
<!-- menu -->
<!-- fixed-top -->
<nav id="navbar-example2" class="navbar fixed-top navbar-light navbar-expand-lg navbar-light bg-light navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    <a class="navbar-brand text-success" href="index.php"><img src="img/logo2.png" width="40" height="40">PcComp</a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle active colorFondo" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"><i class="fas fa-desktop"></i> Productos</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item menuDespl" href="Perifericos.php">Periféricos</a>
                <a class="dropdown-item menuDespl" href="Componentes.php">Componentes</a>
              </div>
            </li>
            <a class="nav-link nav-item active colorFondo" href="mantenimiento.php"><i class="fas fa-tools"></i> Servicios</a>
            <!-- <a class="nav-link nav-item active colorFondo" href="DisenoPc.php"><i class="fa fa-magic"></i> Diseña tu PC</a> -->
            <!-- <a class="nav-link nav-item active colorFondo" href="mantenimiento.php"><i class="fas fa-mobile-alt"></i> Contactanos</a> -->
            <a class="nav-link nav-item active colorFondo" href="Carrito.php"><i class="fas fa-shopping-cart"></i> Carrito(<?php echo (empty($_SESSION['pccomp'])) ? 0 : count($_SESSION['pccomp']); ?>)</a>
          </div>
          <span id="error"></span>
          <div class="navbar-nav ml-auto" id="ocult">
            <button type="button" class="btn btn-success nav-link nav-item active hover" data-toggle="modal" data-target="#exampleModal" data-whatever="inicio sesion"><i class="fas fa-user"></i> Iniciar Sesión</button>
            <button type="button" class="btn btn-success nav-link nav-item active hover" data-toggle="modal" data-target="#exampleModal2" data-whatever="Registrarse"><i class="fas fa-sign-in-alt"></i> Registrarse</button>
          </div>
</nav>
<br><br><br>
<script>

function mostrarContraseña(){
    var contraseña = document.getElementById("password");

    if(contraseña.type == "password"){
        contraseña.type = "text";
    }else{
        contraseña.type = "password";
    }
}

function mostrarContraseña2(){
    var contraseña = document.getElementById("password2");
    if(contraseña.type == "password"){
        contraseña.type = "text";
    }else{
        contraseña.type = "password";
    }
}
</script>