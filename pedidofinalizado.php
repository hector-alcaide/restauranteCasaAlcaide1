<?php
require_once('config/parameters.php');
require_once("config/common_helper.php");
require_once('models/Order.php');
require_once('config/includes/loadProducts.php');
require_once("config/includes/loadExtrasProduct.php");
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <title>Pedidos Casa Alcaide</title>
  <meta name="description" content="Página de pedidos del restaurante Casa Alcaide">
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

  <div class="contenedor bg-image1 pedidos">
    <h1>PEDIDOS</h1>
    <section class="contentPage">
      <h2>PRODUCTOS PEDIDOS</h2>
      <section class="border-2 border-bottom px-4">
        <?php
        if (isset($_SESSION['order'])) {
        ?>
          <div class="row">
            <?php foreach ($_SESSION['order'] as $key => $variable) {          
              $producto = $variable->getProducto(); ?>
              <div class="col-12 d-flex justify-content-around">
                <div>
                  <p> <?= $producto->getNombre() . ' - ' . $producto->getPrecio() . '€' ?></p>
                </div>
                <!-- <button type="button" id="buttonAddProduct" class="px-0 py-0 border-0" data-bs-toggle="modal" data-bs-target="#addProductModal" data-bs-whatever="<?= $producto->__toString() ?>"><div></div></button> -->
                <div class="d-flex justify-content-around">
                  <p>Cantidad: <?= $variable->getCantidad() ?></p>
                </div>
              </div>
            <?php } ?>
          </div>
        <?php } ?>
      </section>

      <section class="text-center pt-4">
        <p>Total: <?= isset($_SESSION['order']) ? common_helper::calcTotalPriceOrder() . '€' : ''?></p>
        <div class="text-center py-4">
          <p>Pedido finalizado.</p>
        </div>
      </section>
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