<?php
include 'php/config.php';
include 'php/conexion.php';
include 'php/logic.php';
//include 'php/registro.php';
include 'php/plantillas/cabecera.php';

//$sentencia = $pdo->prepare("SELECT * FROM `productos`");
$sentencia = $pdo->prepare("SELECT * FROM `productos` WHERE idCat= 1");
$sentencia->execute();
$valores = $sentencia->fetchAll(PDO::FETCH_ASSOC);

$sentencia1 = $pdo->prepare("SELECT * FROM `productos` WHERE idCat= 2");
$sentencia1->execute();
$valores1 = $sentencia1->fetchAll(PDO::FETCH_ASSOC);

$sentencia2 = $pdo->prepare("SELECT * FROM `productos` WHERE idCat= 3");
$sentencia2->execute();
$valores2 = $sentencia2->fetchAll(PDO::FETCH_ASSOC);
?>

<h2 class="titulo">Componentes</h2>
<hr class="hr3" />
<div class="filtro">
  <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Filtrar</button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <button class="dropdown-item"><a href="#" class="btn-menu filtrado" data-filter="todos">Todos</a></button>
    <button class="dropdown-item"><a href="#" class="btn-menu filtrado" data-filter="Tarjeta-Gráfica">Tarjeta Gráfica</a></button>
    <button class="dropdown-item"><a href="#" class="btn-menu filtrado" data-filter="Placa-Base">Placa Base</a></button>
    <button class="dropdown-item"><a href="#" class="btn-menu filtrado" data-filter="Torres">Torres</a></button>
  </div>
</div>
<!-- Tarjetas -->
<div class="container">
  <div class="galeria">
  <?php
          foreach ($valores as $productos) {
          ?>
            <div class="box-img Tarjeta-Gráfica">
            <div class="card h-100">
            <form action="" method="POST">
            <div class="inner">
            <img class="card-img-top" src="img/<?php echo $productos['Imagen']?>" alt='<?php echo $productos['Nombre']?>'></img>
            </div>
            <div class="card-body">
              <h5 class="card-title"><?php echo $productos['Nombre'] ?></h5>
              <p class="card-text ocultar-div"><?php echo $productos['Descripcion'] ?></p>
              <input type="hidden" name="Descripcion" id="Descripcion" value="<?php echo $productos['Descripcion']; ?>">
              <input type="hidden" name="Imagen" id="Imagen" value="<?php echo $productos['Imagen'];?>">
              <input type="hidden" name="Nombre" id="Nombre" value="<?php echo $productos['Nombre']; ?>">
              <input type="hidden" name="Precio" id="Precio" value="<?php echo $productos['Precio']; ?>">
              <button class="btn btn-success" name="comprar" value="Añadir" type="submit">Comprar</button>
              </form>
              Precio: <span class="text-success"><?php echo $productos['Precio'] ?>€</span>
            </div>
          </div>
        </div>
        <?php
          }
        ?>
          <?php
          foreach ($valores1 as $productos) {
          ?>
            <div class="box-img Placa-Base">
            <div class="card h-100">
            <form action="" method="POST">
            <div class="inner">
            <img class="card-img-top" src="img/<?php echo $productos['Imagen']?>" alt='<?php echo $productos['Nombre']?>'></img>
            </div>
            <div class="card-body">
              <h5 class="card-title"><?php echo $productos['Nombre'] ?></h5>
              <p class="card-text ocultar-div"><?php echo $productos['Descripcion'] ?></p>
              <input type="hidden" name="Descripcion" id="Descripcion" value="<?php echo $productos['Descripcion']; ?>">
              <input type="hidden" name="Imagen" id="Imagen" value="<?php echo $productos['Imagen']; ?>">
              <input type="hidden" name="Nombre" id="Nombre" value="<?php echo $productos['Nombre']; ?>">
              <input type="hidden" name="Precio" id="Precio" value="<?php echo $productos['Precio']; ?>">
              <button class="btn btn-success" name="comprar" value="Añadir" type="submit">Comprar</button>
              </form>
              Precio: <span class="text-success"><?php echo $productos['Precio'] ?>€</span>
            </div>
          </div>
        </div>
        <?php
          }
        ?>
          <?php
          foreach ($valores2 as $productos) {
          ?>
            <div class="box-img Torres">
            <div class="card h-100">
            <form action="" method="POST">
            <div class="inner">
            <img class="card-img-top" src="img/<?php echo $productos['Imagen']?>" alt='<?php echo $productos['Nombre']?>'></img>
            </div>
            <div class="card-body">
              <h5 class="card-title"><?php echo $productos['Nombre'] ?></h5>
              <p class="card-text ocultar-div"><?php echo $productos['Descripcion'] ?></p>
              <input type="hidden" name="Descripcion" id="Descripcion" value="<?php echo $productos['Descripcion']; ?>">
              <input type="hidden" name="Imagen" id="Imagen" value="<?php echo $productos['Imagen']; ?>">
              <input type="hidden" name="Nombre" id="Nombre" value="<?php echo $productos['Nombre']; ?>">
              <input type="hidden" name="Precio" id="Precio" value="<?php echo $productos['Precio']; ?>">
              <button class="btn btn-success" name="comprar" value="Añadir" type="submit">Comprar</button>
              </form>
              Precio: <span class="text-success"><?php echo $productos['Precio'] ?>€</span>
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
