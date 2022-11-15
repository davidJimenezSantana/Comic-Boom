<?php

require_once "persistencia/conexion.php";
require_once "persistencia/modelDAO/categoriaDAO.php";

class categoria{
    private $idcategoria;
    private $nombre;

    private $conexion;
    private $categoriaDAO;

    public function __construct($idcategoria = 0, $nombre = "")
    {
        $this->idcategoria = $idcategoria;
        $this->nombre = $nombre;

        $this->conexion = new conexion();
        $this->categoriaDAO = new categoriaDAO($this->idcategoria,$this->nombre);
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
        $this->conexion->abrir();
        $this->conexion->ejecutar($this->categoriaDAO->consultarCategoria());
        $resultado = $this->conexion->extraer();
        $this->nombre = $resultado["nombre"];
        $this->conexion->cerrar();
    }
}