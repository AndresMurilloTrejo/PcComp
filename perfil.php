<?php
include 'php/config.php';
include 'php/conexion.php';
include 'php/logic.php';
//include 'php/registro.php';
include 'php/plantillas/cabecera.php';

$perfil = $_SESSION['logeado'];
$sentencia = $pdo->prepare("SELECT * FROM `usuarios` WHERE Email='$perfil'");
$sentencia->execute();
$valores = $sentencia->fetchAll(PDO::FETCH_ASSOC);
?>
<center>
<div class="card" style="width: 55vh;">
<?php
foreach($valores as $datos){
    ?>
    <form action="" method="POST">
        <img class="card-img-top" name="imag" src="img/perfil.jpg" alt="Imagen del perfil">
      <div class="card-body">
      <!-- <img class="circ" src="img/perfil.jpg"> -->
      <h5 class="card-title"><b><?php echo $datos['Nombre'];?> <?php echo $datos['Apellidos'];?></b></h5>
      <hr>
      <p class="card-text"><b>Correo:</b> <?php echo $datos['Email'];?>.
      <br><b>Dirección:</b> <?php echo $datos['Direccion'];?>.
      <br><b>Ciudad:</b> <?php echo $datos['Ciudad'];?>.</p>
    </form>
</div>
  <?php
}
?>
</div>
</center>
<?php
  //include 'php/plantillas/footer.php';
  include 'php/plantillas/pie.php';
?>