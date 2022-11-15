<?php

require_once "persistencia/conexion.php";
require_once "persistencia/modelDAO/productoDAO.php";
require_once "marca.php";
require_once "categoria.php";

class producto
{
    private $idproducto;
    private $nombre;
    private $cantidad;
    private $precio;
    private $marca;
    private $categoria;

    private $productoDAO;
    private $conexion;

    public function __construct($idproducto, $nombre, $cantidad, $precio, $marca_idmarca, $categoria_idcategoria)
    {
        $this->idproducto = $idproducto;
        $this->nombre = $nombre;
        $this->cantidad = $cantidad;
        $this->precio = $precio;
        $this->marca = new marca();
        $this->categoria = new categoria();

        $this->conexion = new conexion();
        $this->productoDAO = new productoDAO($this->idproducto, $this->nombre, $this->cantidad, $this->precio, $marca_idmarca, $categoria_idcategoria);
    }



    /**
     * Get the value of idproducto
     */
    public function getIdproducto()
    {
        return $this->idproducto;
    }

    /**
     * Set the value of idproducto
     */
    public function setIdproducto($idproducto)
    {
        $this->idproducto = $idproducto;

        return $this;
    }

    /**
     * Get the value of nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of cantidad
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set the value of cantidad
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get the value of precio
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set the value of precio
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }


    /**
     * Get the value of marca
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set the value of marca
     */
    public function setMarca($marca)
    {
        $this->marca = $marca;

        return $this;
    }

    /**
     * Get the value of categoria
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Set the value of categoria
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }


    public function consultarProducto()
    {
        $this->conexion->abrir();
        $this->conexion->ejecutar($this->productoDAO->consultarProducto());
        $resultado = $this->conexion->extraer();

        $this->nombre = $resultado["nombre"];
        $this->cantidad = $resultado["cantidad"];
        $this->precio = $resultado["precio"];
        $this->marca = new marca($resultado["marca_idmarca"]);
        $this->categoria = new categoria($resultado["categoria_idcategoria"]);

        $this->marca->consultarMarca();
        $this->categoria->consultarCategoria();

        $this->conexion->cerrar();
    }
}
