<!DOCTYPE html>
<html lang="es">

<head>
  <title>Casa Alcaide</title>
  <meta name="description" content="Página web del restaurante Casa Alcaide">
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

  <section class="bannerPrincipal">
    <h1>PRUEBA EL LUJO</h1>
    <h2>COCINA AL FUEGO</h2>
    <div>
      <p class="mt-5 mb-0 ">Atrévete a probar la cautivadora experiencia que ofrece nuestro restaurante, combinando un ambiente de lujo con recetas caseras.</p>
      <p class="mt-0 mb-4 py-0">Recetas utilizadas para innovar platos irresistibles.</p>
      <div class="text-center py-5">
        <a href="carta.php"><button class="button-1">VER CARTA</button></a>
      </div>
    </div>
  </section>

  <div class="contenedor bg-image1 home">
    <section class="bannerPrincipalMovil">
      <div>
        <p class="mt-lg-5 mb-0 ">Atrévete a probar la cautivadora experiencia que ofrece nuestro restaurante, combinando un ambiente de lujo con recetas caseras.</p>
        <p class="mt-0 mb-4 py-0">Recetas utilizadas para innovar platos irresistibles.</p>
        <div class="text-center py-lg-5 py-4">
          <a href="carta.php"><button class="button-1">VER CARTA</button></a>
        </div>
      </div>
    </section>

    <section class="mb-lg-0 mb-4">
      <h2 class="mt-3">CASA ALCAIDE</h2>
      <p class="pt-2">Casa Alcaide es un restaurante que lleva más de tres generaciones cocinando. Un restaurante lujoso con una cocina rural que utiliza el fuego y la leña para crear su mayoría de platos.</p>
      <div class="text-center py-lg-4 py-4">
        <a href="sobrenosotros.php"><button class="button-1">LEER MÁS</button></a>
      </div>
    </section>

    <section class="panelCarta">
      <div class="row contenedor">
        <div id="imagenEnsaladasSombra" class=" col-lg-4 col-6 px-0">
          <div class="imagenProductosSombra text-center d-flex align-items-center justify-content-center">
            <a href="carta.php#ensaladas"><button class="button-1">ENSALADAS</button></a>
          </div>
        </div>
        <div id="imagenCarnesSombra" class=" col-lg-4 col-6 px-0">
          <div class="imagenProductosSombra text-center d-flex align-items-center justify-content-center">
            <a href="carta.php#carnes"><button class="button-1">CARNES</button></a>
          </div>
        </div>
        <div id="imagenPescadosSombra" class=" col-lg-4 col-6 px-0">
          <div class="imagenProductosSombra text-center d-flex align-items-center justify-content-center">
            <a href="carta.php#pescados"><button class="button-1">PESCADOS</button></a>
          </div>
        </div>
        <div id="imagenVinosSombra" class=" col-lg-4 col-6 px-0">
          <div class="imagenProductosSombra text-center d-flex align-items-center justify-content-center">
            <a href="carta.php#vinos"><button class="button-1">VINOS</button></a>
          </div>
        </div>
        <div id="imagenCervezasSombra" class=" col-lg-4 col-6 px-0">
          <div class="imagenProductosSombra text-center d-flex align-items-center justify-content-center">
            <a href="carta.php#cervezas"><button class="button-1">CERVEZAS</button></a>
          </div>
        </div>
        <div id="imagenPostresSombra" class=" col-lg-4 col-6 px-0">
          <div class="imagenProductosSombra text-center d-flex align-items-center justify-content-center">
            <a href="carta.php#postres"><button class="button-1">POSTRES</button></a>
          </div>
        </div>
      </div>
    </section>

    <section class="mb-lg-0 mb-4">
      <div id="iconoHorarios"></div>
      <h2 class="mt-3">HORARIOS</h2>
      <p class="pt-2">Martes - Viernes</p>
      <p> 13:00 - 23:00</p>
      <p>Sábado - Domingo</p>
      <p>12:00 - 00:00</p>
    </section>

    <section class="mb-lg-0 mb-4">
      <div id="iconoUbicacion"></div>
      <h2 class="mt-3">UBICACIÓN</h2>
      <p class="pt-2">Carrer Ntra Señora de Lourdes Nº34, Molins de Rei</p>
      <div class="text-center py-lg-4 py-4">
        <a href="sobrenosotros.php#ubicacion"><button class="button-1">IR A UBICACIÓN</button></a>
      </div>
    </section>

    <section class="mb-lg-0 pb-4">
      <h2 class="mt-3">SÍGUENOS</h2>
      <p class="pt-2">Síguenos en nuestras redes sociales y comparte con el mundo los platos que has probado y las emociones que has sentido al vivir la experiencia de comer en Casa Alcaide.</p>
      <div class="row pt-3 redesSociales d-flex justify-content-center">
        <a class="col-4" id="instagram" href="https://www.instagram.com/"></a>
        <a class="col-4" id="twitter" href="https://www.twitter.com"></a>
        <a class="col-4" id="facebook" href="https://www.facebook.com"></a>
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