<?php
require_once('models/Product.php');
class Meat extends Product
{
    protected $extras = array();

    public function __construct($idProducto, $nombre, $definicion, $precio, $extras, $idCategoriaProducto = 1)
    {
        parent::__construct($idProducto, $nombre, $definicion, $precio, $idCategoriaProducto);
        $this->extras = $extras;
        $this->idCategoriaProducto = 1;
    }

    //Falta método abstracto

    //Funciones

    //Extras
    public function getExtras()
    {
        return $this->extras;
    }
    public function setExtras($extras)
    {
        $this->extras = $extras;
    }
}
