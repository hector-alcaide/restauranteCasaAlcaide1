<?php
abstract class Product
{
    protected $idProducto;
    protected $nombre;
    protected $definicion;
    protected $precio;
    protected $idCategoriaProducto;

    public function __construct($idProducto, $nombre, $definicion, $precio, $idCategoriaProducto)
    {
        $this->idProducto = $idProducto;
        $this->nombre = $nombre;
        $this->definicion = $definicion;
        $this->precio = $precio;
        $this->idCategoriaProducto = $idCategoriaProducto;
    }

    //Id 
    public function getIdProducto()
    {
        return $this->idProducto;
    }
    /*
    * Set id comentado ya que el id de un producto no deberia poderse cambiar ya que pueden generarse conflictos 
    * con IDs ya creados. por constructor se pasa un ID autoincremental pillando la ultima posicion de un array 
    */
    // public function setIdProducto($idProducto)
    // {
    //     $this->idProducto = $idProducto;
    // }

    //Nombre 
    public function getNombre()
    {
        return $this->nombre;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    //Definicion
    public function getDefinicion()
    {
        return $this->definicion;
    }
    public function setDefinicion($definicion)
    {
        $this->definicion = $definicion;
    }

    //Precio
    public function getPrecio()
    {
        return $this->precio;
    }
    public function setPrecio($precio)
    {
        $this->precio = $precio;
    }

    //Id categoria del producto
    public function getIdCategoriaProducto()
    {
        return $this->idCategoriaProducto;
    }
    /*
    * Comentado ya que la categoria se define auto. en cada clase, cada clase tiene un id
    * Al no meterse manualmente tampoco debe editarse manualmente
    */
    // public function setIdCategoriaProducto($idCategoriaProducto)
    // {
    //     $this->idCategoriaProducto = $idCategoriaProducto;
    // }

    /*Método que te saca el nombre de la categoria relacionando el id de la cat. 
    * con la posicion de un array que guarda el nombre de cada cat.
    */
    public function getNombreCategoria(){
        require_once('data/categoriesProduct.php');
        return $categories[$this->idCategoriaProducto];
    }

    //Método que te devuelve el objeto completo en un json
    // public function toJson(){
    //     $productJson = array(
    //         'idProducto' => $this->idProducto,
    //         'nombre' => $this->nombre,
    //         'definicion' => $this->definicion,
    //         'precio' => $this->precio,
    //         'imagen' => $this->imagen,
    //         'idCategoriaProducto' => $this->idCategoriaProducto,
    //     );
    //     return json_encode($productJson);
    // }

    //Metodo parche json, devuelve string con los datos del producto para trabajarlo
    public function __toString()
    {
        $productString = 
        $this->idProducto . ';' .
        $this->nombre . ';' .
        $this->definicion . ';' .
        $this->precio . ';' .
        $this->idCategoriaProducto;

        return $productString;
    }

    //Método abstracto
}
