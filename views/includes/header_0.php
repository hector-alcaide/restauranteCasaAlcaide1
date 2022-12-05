<?php
require_once('config/common_helper.php');
/*
*  Variable que tiene como valor el nombre del fichero de la pagina
*/
$fileName = common_helper::getFileName();
//navbar-expand-lg
?>
<nav class="navbar navbar-expand-lg bg-color1 container-fluid">
    <div class="contenedor">
        <div class="d-flex justify-content-between">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <img id="logoMovil" src="assets/img/logoRestaurante.png" alt="Casa Alcaide Logo">
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto align-items-center text-center">
                <li class="nav-item">
                    <a class="nav-link <?= $fileName && $fileName == "index" ? 'active' : '' ?> px-0" aria-current="page" href="index.php">INICIO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $fileName && $fileName == "carta" ? 'active' : '' ?> px-0" href="carta.php">CARTA</a>
                </li>
                <li class="nav-item" id="logo">
                    <img src="assets/img/logoRestaurante.png" alt="Casa Alcaide Logo">
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $fileName && $fileName == "pedidos" ? 'active' : '' ?> px-0" href="pedidos.php">PEDIDOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $fileName && $fileName == "cuenta" ? 'active' : '' ?> px-0" href="cuenta.php">CUENTA</a>
                </li>
            </ul>
        </div>

    </div>
</nav>