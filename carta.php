<?php
require_once('config/parameters.php');
require_once("config/common_helper.php");
require_once('models/Order.php');
require_once('config/includes/loadProducts.php');
require_once("config/includes/loadExtrasProduct.php");

//saber la categoria para saber que array de load de productos buscar
$products = null;
if (isset($_POST['idCategoria_input']) && $_POST['idCategoria_input']) {
  switch ($_POST['idCategoria_input']) {
    case 1:
      $products = $meats;
      break;
    case 2:
      $products = $fishes;
      break;
    case 3:
      $products = $salads;
      break;
    case 4:
      $products = $beers;
      break;
    case 5:
      $products = $wines;
      break;
    case 6:
      $products = $desserts;
      break;
  }
}

//Cargar sessión la cuál se ira añadiendo los productos escogidos
session_start();
if (isset($_SESSION['order'])) {
  if (isset($_POST['idProducto_input'])) {
    //Crea el pedido pasandole objeto producto y un array con los extras
    $order = new Order($products[$_POST['idProducto_input']], common_helper::getExtrasAdded(), $_POST['cantidad'], null);
    array_push($_SESSION['order'], $order);
    unset($_POST);
  }
} else {
  $_SESSION['order'] = array();
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <title>Carta Casa Alcaide</title>
  <meta name="description" content="Página de carta del restaurante Casa Alcaide">
  <meta charset="utf-8">
  <meta name="keywords" content="restaurante,comer,comida,brasa,carnes,pescados,cervezas,comprar,pedir">
  <meta name="author" content="Hèctor Alcaide Sànchez">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/navbars/">
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/css/style.css" rel="stylesheet" type="text/css" media="screen">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<body class="bg-color2">
  <header>
    <?php
    require_once('views/includes/header_0.php');
    ?>
  </header>

  <div class="contenedor bg-image1">
    <h1>CARTA</h1>
    <?php require_once('views/includes/addProductModal.php'); ?>
    <section class="contentPage">
      <section class="border-2 border-bottom px-4" id="ensaladas">
        <h2>ENSALADAS</h2>
        <div class="d-flex justify-content-around py-4">
          <div id="imagenEnsaladas" class="imagenProductos mx-lg-3 my-lg-3">
          </div>
          <div class="row text-center me-lg-3 anchoProductos">
            <?php common_helper::printArrayProducts($salads); ?>
          </div>
        </div>
      </section>
      <section class="border-2 border-bottom px-4" id="carnes">
        <h2 class="pt-4">CARNES</h2>
        <div class="d-flex justify-content-around py-4">
          <div class="row text-center me-lg-3 anchoProductos">
            <?php common_helper::printArrayProducts($meats); ?>
          </div>
          <div id="imagenCarnes" class="imagenProductos mx-lg-3 my-lg-3">
          </div>
        </div>
      </section>
      <section class="border-2 border-bottom px-4" id="pescados">
        <h2 class="pt-4">PESCADOS</h2>
        <div class="d-flex justify-content-around py-4">
          <div id="imagenPescados" class="imagenProductos mx-lg-3 my-lg-3">
          </div>
          <div class="row text-center me-lg-3 anchoProductos">
            <?php common_helper::printArrayProducts($fishes); ?>
          </div>
        </div>
      </section>
      <section class="border-2 border-bottom px-4" id="cervezas">
        <h2 class="pt-4">CERVEZAS</h2>
        <div class="d-flex justify-content-around py-4">
          <div class="row text-center me-lg-3 anchoProductos">
            <?php common_helper::printArrayProducts($beers); ?>
          </div>
          <div id="imagenCervezas" class="imagenProductos mx-lg-3 my-lg-3">
          </div>
        </div>
      </section>
      <section class="border-2 border-bottom px-4" id="vinos">
        <h2 class="pt-4">VINOS</h2>
        <div class="d-flex justify-content-around py-4">
          <div id="imagenVinos" class="imagenProductos mx-lg-3 my-lg-3">
          </div>
          <div class="row text-center me-lg-3 anchoProductos">
            <?php common_helper::printArrayProducts($wines); ?>
          </div>
        </div>
      </section>
      <section class="border-2 border-bottom px-4" id="postres">
        <h2 class="pt-4">POSTRES</h2>
        <div class="d-flex justify-content-around py-4">
          <div class="row text-center me-lg-3 anchoProductos">
            <?php common_helper::printArrayProducts($desserts); ?>
          </div>
          <div id="imagenPostres" class="imagenProductos mx-lg-3 my-lg-3">
          </div>
        </div>
      </section>
    </section>
    <section class="py-5">
      <h2 class="pt-5">ACCEDE A LA PÁGINA DE PEDIDOS</h2>
      <div class="text-center py-5">
        <a href="pedidos.php"><button class="button-1">REALIZAR PEDIDO</button></a>
      </div>
    </section>
  </div>

  <footer>
    <?php
    require_once('views/includes/footer.php');
    ?>
  </footer>
</body>

<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/scripts.js"></script>

</html>