<?php
class Customer
{
    protected $idCliente;
    protected $usuario;
    protected $email;
    protected $contrasena;
    protected $nombre;
    protected $apellidos;
    protected $telefono;
    protected $direccion;


    public function __construct($idCliente, $usuario, $email, $contrasena, $nombre, $apellidos, $telefono, $direccion)
    {
        $this->idCliente = $idCliente;
        $this->usuario = $usuario;
        $this->email = $email;
        $this->contrasena = $contrasena;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->telefono = $telefono;
        $this->direccion = $direccion;
    }

    //Id 
    public function getIdCliente()
    {
        return $this->idCliente;
    }
    /*
    * Set id comentado ya que el id de un cliente no deberia poderse cambiar ya que pueden generarse conflictos 
    * con IDs ya creados. por constructor se pasa un ID autoincremental pillando la ultima posicion de un array 
    */
    // public function setIdCliente($idCliente)
    // {
    //     $this->idCliente = $idCliente;
    // }

    //Usuario
    public function getUsuario()
    {
        return $this->usuario;
    }
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }

    //Email
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }

    //Contrasena
    public function getContrasena()
    {
        return $this->contrasena;
    }
    public function setContrasena($contrasena)
    {
        $this->contrasena = $contrasena;
    }

    //Nombre 
    public function getNombre()
    {
        return $this->nombre;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    //Apellidos
    public function getApellidos()
    {
        return $this->apellidos;
    }
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
    }

    //Telefono
    public function getTelefono()
    {
        return $this->telefono;
    }
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }

    //Direccion
    public function getDireccion()
    {
        return $this->direccion;
    }
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }
}
