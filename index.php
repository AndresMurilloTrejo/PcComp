<?php 
include 'php/config.php';
include 'php/conexion.php';
include 'php/logic.php';
//include 'php/registro.php';
include 'php/plantillas/cabecera.php';
//sentencia para obtener los 3 productos mas vendidos
$sentencia = $pdo->prepare("SELECT * FROM productos ORDER BY ventas DESC LIMIT 3");
$sentencia->execute();
$valores = $sentencia->fetchAll(PDO::FETCH_ASSOC);
//sentencia para obtener 6 productos en oferta
$sentencia2 = $pdo->prepare("SELECT * FROM productos ORDER BY Stock ASC LIMIT 6");
$sentencia2->execute();
$valores1 = $sentencia2->fetchAll(PDO::FETCH_ASSOC);

?>

<h2 class="titulo">Top Ventas</h2>
<hr class="hr1" />
<!-- Top ventas -->
<div class="card-group">
  <?php
  foreach($valores as $productos){
    ?>
  <div class="card">
    <div class="inner">
    <img class="card-img-top" src="img/<?php echo $productos['Imagen']?>"  alt='<?php echo $productos['Nombre']?>'>
    </div>
    <div class="card-body">
      <h5 class="card-title text-center"><?php echo $productos['Nombre']?></h5>
      <!-- <p class="card-text"><?php echo $productos['Descripcion']?></p> -->
      <center>
      Precio: <span class="text-success"><?php echo $productos['Precio'] ?>€</span>
      </center>
    </div>
  </div>
  <?php
  }
  ?>
</div>
<!-- Fin Carousel -->
<h2 class="titulo pad">¡EN OFERTA!</h2>
<hr class="hr1"/>
<!-- Tarjetas -->
<div class="container">
  <div class="row row-cols-1 row-cols-md-3">
    <?php
    foreach($valores1 as $productos){
    ?>
    <div class="col mb-3">
      <div class="card h-100">
      <div class="inner">
        <img src="img/<?php echo $productos['Imagen']?>" class="card-img-top" alt='<?php echo $productos['Nombre']?>'/>
      </div>
        <div class="card-body">
          <h5 class="card-title"><?php echo $productos['Nombre']?></h5>
          <p class="card-text"><?php echo $productos['Descripcion']?></p>
          Antes: <span class="text-danger"><?php echo $productos['Precio']?>€</span> - Ahora: <span class="text-success"><?php echo ($productos['Precio']*0.90)?>€</span> <!--Se aplica un 10% de descuento.-->
        </div>
      </div>
    </div>
    <?php
    }
    ?>
  </div>
</div>
<!-- Fin Tarjetas -->

<?php
  include 'php/plantillas/footer.php';
  include 'php/plantillas/pie.php';
  ?>
