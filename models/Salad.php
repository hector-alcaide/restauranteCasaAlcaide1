<?php
require_once('models/Product.php');
class Salad extends Product
{
    public function __construct($idProducto, $nombre, $definicion, $precio, $idCategoriaProducto = 3)
    {
        parent::__construct($idProducto, $nombre, $definicion, $precio, $idCategoriaProducto);
        $this->idCategoriaProducto = 3;
    }

    //Falta método abstracto

    //Funciones
}
