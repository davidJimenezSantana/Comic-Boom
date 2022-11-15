<?php

class productoDAO{
    private $idproducto;
    private $nombre;
    private $cantidad;
    private $precio;
    private $marca_idmarca;
    private $categoria_idcategoria;

    public function __construct($idproducto,$nombre,$cantidad,$precio,$marca_idmarca,$categoria_idcategoria)
    {
        $this->idproducto = $idproducto;
        $this->nombre = $nombre;
        $this->cantidad = $cantidad;
        $this->precio = $precio;
        $this-> marca_idmarca = $marca_idmarca;
        $this-> categoria_idcategoria = $categoria_idcategoria;
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
     * Get the value of marca_idmarca
     */ 
    public function getMarca_idmarca()
    {
        return $this->marca_idmarca;
    }

    /**
     * Set the value of marca_idmarca
     */ 
    public function setMarca_idmarca($marca_idmarca)
    {
        $this->marca_idmarca = $marca_idmarca;

        return $this;
    }

    /**
     * Get the value of categoria_idcategoria
     */ 
    public function getCategoria_idcategoria()
    {
        return $this->categoria_idcategoria;
    }

    /**
     * Set the value of categoria_idcategoria
     */ 
    public function setCategoria_idcategoria($categoria_idcategoria)
    {
        $this->categoria_idcategoria = $categoria_idcategoria;

        return $this;
    }

    public function consultarProducto(){
        return "SELECT *
        FROM producto
        WHERE idproducto = '" . $this->idproducto . "'";
    }
}