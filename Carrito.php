<?php
include 'php/config.php';
include 'php/logic.php';
//include 'php/registro.php';
include 'php/plantillas/cabecera.php';
?>

<!-- Carrito -->
<?php if(!empty($_SESSION['pccomp'])){ ?>
<table class="table">
  <thead>
    <tr>
      <th scope="col" class="text-success">Producto</th>
      <th scope="col" class="text-success">Nombre</th>
      <th scope="col" class="text-success">Precio</th>
      <th scope="col" class="text-success">Descripcion</th>
      <th scope="col"></th>
    </tr>
  </thead>

<?php
  $total = 0;
  foreach($_SESSION['pccomp'] as $indice=>$producto){
  $total += $producto['Precio'];

  ?>
  <tbody>
  <tr>
    <th><img class="imgCarrito" src="img/<?php echo $producto['Imagen']?>" alt="<?php echo $producto['Nombre']?>"></img></th>
    <td class="text-success"><?php echo $producto['Nombre'] ?></td>
    <td class="text-success"><?php echo $producto['Precio'] ?>€</td>
    <td class="text-success"><?php echo $producto['Descripcion'] ?></td>
    <td>
      <form action="" method="POST">
        <input type="hidden" name="Nombre" value="<?php echo $producto['Nombre']; ?>">
        <button class="btn btn-danger" name="comprar" value="Eliminar" type="submit">X</button>
      </form>
    </td>
  </tr>
  </tbody>
<?php 
}
?>
<caption class="text-success">Total: <?php echo $total?>€</caption>
</table>
<?php 
}else{
  ?>
  <div class="alert alert-success text-center">No hay nada en el carrito.</div>
<?php 
}
?>

<!-- Fin Carrito -->

<?php include 'php/plantillas/pie.php'; ?>