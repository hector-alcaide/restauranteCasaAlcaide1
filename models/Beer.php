<?php
require_once('models/Product.php');
class Beer extends Product
{
    public function __construct($idProducto, $nombre, $definicion, $precio, $idCategoriaProducto = 4)
    {
        parent::__construct($idProducto, $nombre, $definicion, $precio, $idCategoriaProducto);
        $this->idCategoriaProducto = 4;
    }

    //Falta método abstracto

    //Funciones
}
