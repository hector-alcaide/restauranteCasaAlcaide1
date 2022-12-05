<?php
require_once('models/Product.php');
class Dessert extends Product
{
    public function __construct($idProducto, $nombre, $definicion, $precio, $idCategoriaProducto = 6)
    {
        parent::__construct($idProducto, $nombre, $definicion, $precio, $idCategoriaProducto);
        $this->idCategoriaProducto = 6;
    }

    //Falta método abstracto

    //Funciones
}
