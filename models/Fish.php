<?php
require_once('models/Product.php');
class Fish extends Product
{
    protected $extras = array();

    public function __construct($idProducto, $nombre, $definicion, $precio, $extras, $idCategoriaProducto = 2)
    {
        parent::__construct($idProducto, $nombre, $definicion, $precio, $idCategoriaProducto);
        $this->extras = $extras;
        $this->idCategoriaProducto = 2;
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
