<?php
require_once('models/Product.php');
class Wine extends Product
{
    public function __construct($idProducto, $nombre, $definicion, $precio, $idCategoriaProducto = 5)
    {
        parent::__construct($idProducto, $nombre, $definicion, $precio, $idCategoriaProducto);
        $this->idCategoriaProducto = 5;
    }

    //Falta método abstracto

    //Funciones
}
