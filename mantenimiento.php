<?php
include 'php/config.php';
include 'php/conexion.php';
include 'php/logic.php';
//include 'php/registro.php';
include 'php/plantillas/cabecera.php';
 ?>

    <!-- jumbotron -->
<center>
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">¡En nuestra empresa trabajamos con las mejores herramientas!</h1>
        <p class="lead">En caso de averia en alguno de sus componentes o perifericos tendra 2 meses de garantia.</p>
      </div>
    </div>
    <!-- fin jumbotron -->

    <!-- formulario -->
    <div class="card-group">
  <div class="card">
    <img class="card-img-top" src="img/reparacion.jpg" alt="Reparacion">
    <div class="card-body">
      <h2 class="card-title">Reparación</h2>
      <p class="card-text">Nuestro servicio en reparacion de componentes y perifericos informaticos es increible gracias a la experiencia de nuestros trabajadores.</p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="img/montaje.jpg" alt="Montaje">
    <div class="card-body">
      <h2 class="card-title">Montaje</h2>
      <p class="card-text">Nuestro servicio en montaje de componentes informaticos es increible gracias a la experiencia de nuestros trabajadores y la gran demanda que tiene.</p>
    </div>
  </div>
</center>
<br>

<?php
 include "php/plantillas/footer.php";
 include "php/plantillas/pie.php";
 ?>