<?php
include 'php/conexion.php';

if (isset($_POST['registro'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['apellidos']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['edad']) >= 1 && strlen($_POST['direccion']) >= 1 && strlen($_POST['poblacion']) >= 1 && strlen($_POST['ciudad']) >= 1 && strlen($_POST['contrasena']) >= 1) {
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $email = $_POST['email'];
        $edad = $_POST['edad'];
        $direccion = $_POST['direccion'];
        $poblacion = $_POST['poblacion'];
        $ciudad = $_POST['ciudad'];
        $contrasena = $_POST['contrasena'];

            $comprobacion = 0;
            //preg_match para el nombre
            if (preg_match('/^[a-zÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ][a-zÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ\s]{1,50}$/i', $nombre)) {
                $comprobacion++;
            } else {
                ?>
                 <script>
                    window.onload= function(){
                        document.getElementById('error').innerHTML="<span style='color:red'>Nombre incorrecto</span>";
                    }
                </script>
             <?php
                $comprobacion--;
            }
            //preg_match para los apellidos
            if (preg_match('/^[a-zÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ][a-zÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ\s]{1,50}$/i', $apellidos)) {
                $comprobacion++;
            } else {
                ?>
                 <script>
                    window.onload= function(){
                        document.getElementById('error').innerHTML="<span style='color:red'>Apellidos incorrecto</span>";
                    }
                </script>
             <?php
                $comprobacion--;
            }
            //preg_match para el Ciudad
            if (preg_match('/^[a-zÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ][a-zÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ\s]{1,50}$/i', $ciudad)) {
                $comprobacion++;
            } else {
                ?>
                 <script>
                    window.onload= function(){
                        document.getElementById('error').innerHTML="<span style='color:red'>Ciudad incorrecta</span>";
                    }
                </script>
             <?php
                $comprobacion--;
            }
            //preg_match para el Poblacion
            if (preg_match('/^[a-zÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ][a-zÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ\s]{1,50}$/i', $poblacion)) {
                $comprobacion++;
            } else {
                ?>
                 <script>
                    window.onload= function(){
                        document.getElementById('error').innerHTML="<span style='color:red'>Poblacion incorrecta</span>";
                    }
                </script>
             <?php
                $comprobacion--;
            } 
            //preg_match para el Direccion
            if (preg_match('/^[a-zÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ][a-zA-Z0-9][a-zÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ\s]{1,50}/i', $direccion)) {
                $comprobacion++;
            } else {
                ?>
                 <script>
                    window.onload= function(){
                        document.getElementById('error').innerHTML="<span style='color:red'>Direccion incorrecta</span>";
                    }
                </script>
             <?php
                $comprobacion--;
            }
            
            //preg_match para el Email
           if (filter_var($email, FILTER_VALIDATE_EMAIL)){
                $comprobacion++;
            }else{
                ?>
                <script>
                   window.onload= function(){
                       document.getElementById('error').innerHTML="<span style='color:red'>Email incorrecto</span>";
                   }
               </script>
                <?php
                var_dump($email);
               $comprobacion--;
            }
            
            //preg_match para la edad
            if ($edad > 0 && $edad <= 99) {
                $comprobacion++;
            } else {
                ?>
                 <script>
                    window.onload= function(){
                        document.getElementById('error').innerHTML="<span style='color:red'>Edad incorrecta</span>";
                    }
                </script>
             <?php
                $comprobacion--;
            }

            // // al menos un carácter en minúsculas
            // // al menos un carácter en mayúsculas
            // // al menos un dígito
            // // al menos de 8 a 20 digitos
            // // al menos un numero
            // // al menos un signo especial de @ # -_ $% ^ & + = § !?
            // //Danvil21@
            //preg_match para la contraseña
            if (preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,20}$/', $contrasena)) {
                $comprobacion++;
            } else {
                ?>
                 <script>
                    window.onload= function(){
                        document.getElementById('error').innerHTML="<span style='color:red'>Contraseña incorrecta</span>";
                    }
                </script>
             <?php
                $comprobacion--;
            }

        if ($comprobacion == 8) {

            $email = $_POST['email'];

            $mail = "SELECT * FROM usuarios WHERE email='$email'";

            $result = mysqli_query($conexion, $mail);

            $comprobar_mail = mysqli_num_rows($result);

            $consulta = "INSERT INTO usuarios (Nombre, Apellidos, Email, Edad, Direccion, Poblacion, Ciudad, Contrasena) VALUES ('$nombre', '$apellidos', '$email', '$edad', '$direccion', '$poblacion', '$ciudad', '$contrasena')";
            $resultado = mysqli_query($conexion, $consulta);

            if ($resultado) {
                ?>
                 <script>
                    window.onload= function(){
                        document.getElementById('error').innerHTML="<span style='color:green'>¡Te has registrado correctamente!</span>";
                    }
                </script>
                <?php
            } else {
                ?>
                <script>
                    window.onload= function(){
                        document.getElementById('error').innerHTML="<span style='color:red'>¡No te has registrado!</span>";
                    }
                </script>
                <?php
            }
        }
    } else {
        ?>
        <script>
            window.onload= function(){
                document.getElementById('error').innerHTML="<span style='color:red'>Rellena todos los campos</span>";
            }
        </script>
        <?php
}
}

if (isset($_POST['logear'])) {

    if (strlen($_POST['email']) >= 1 && strlen($_POST['contrasena']) >= 1) {
        $email = $_POST['email'];
        $_SESSION['email'] = $email;
        $contrasena = $_POST['contrasena'];
        //sentencia para comprobar si el email y la contraseña existen en la tabla usuarios
        $consulta1 = "SELECT * FROM usuarios WHERE Email = '$email' AND Contrasena = '$contrasena'";
        $result = mysqli_query($conexion, $consulta1);
        $row_count = mysqli_num_rows($result);
        if ($row_count == 1) {
            //sentencia para obtener el nombre del usuario con el que coincide el email y la contraseña
            $sentencia = $pdo->prepare("SELECT Nombre FROM `usuarios` WHERE Email = '$email' AND Contrasena = '$contrasena'");
            $sentencia->execute();
            $valores = $sentencia->fetchAll(PDO::FETCH_ASSOC);
            $_SESSION['nombre'] = $valores[0]['Nombre'];
            $_SESSION['logeado'] = $_POST['email'];
        } else {
            ?>
            <script>
                window.onload= function(){
                    document.getElementById('error').innerHTML="<span style='color:red'>¡Email o Contraseña incorrecto!</span>";
                }
            </script>
            <?php
        }
    }
}
?>

<?php
if (isset($_SESSION['logeado']) && $_SESSION['logeado'] != '') {
    ?>
    <script>
        window.onload = function(){
            var x = document.getElementById('ocult');
            x.innerHTML = '<p><a class="text-success" href="perfil.php"><i class="fas fa-user"></i> <?php echo $_SESSION['nombre']; ?></a></span><form action="" method="POST"><button class="btn btn-success" type="submit" name="cerrar">Cerrar Sesión</button></form>';
        }
    </script>
<?php
}
if (isset($_POST['cerrar'])) {
    $_SESSION['logeado'] = '';
    ?>
<script>
    window.onload = function(){
        var x = document.getElementById('ocult');
        x.innerHTML = '<div class="navbar-nav ml-auto" id="ocult"><button type="button" class="btn btn-success nav-link nav-item active hover" data-toggle="modal" data-target="#exampleModal" data-whatever="inicio sesion"><i class="fas fa-user"></i> Iniciar Sesión</button><button type="button" class="btn btn-success nav-link nav-item active hover" data-toggle="modal" data-target="#exampleModal2" data-whatever="Registrarse"><i class="fas fa-sign-in-alt"></i> Registrarse</button></div>'
    }
</script>
<?php
header('location: index.php');
}