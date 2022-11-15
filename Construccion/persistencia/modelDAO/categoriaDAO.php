<?php

class categoriaDAO{
    private $idcategoria;
    private $nombre;

    public function __construct($idcategoria, $nombre)
    {
        $this->idcategoria = $idcategoria;
        $this->nombre = $nombre;
    }
    


    /**
     * Get the value of idcategoria
     */ 
    public function getIdcategoria()
    {
        return $this->idcategoria;
    }

    /**
     * Set the value of idcategoria
     */ 
    public function setIdcategoria($idcategoria)
    {
        $this->idcategoria = $idcategoria;

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

    public function consultarCategoria(){
        return "SELECT nombre
                FROM categoria
                WHERE idcategoria = '" . $this->idcategoria . "'";
    }
}