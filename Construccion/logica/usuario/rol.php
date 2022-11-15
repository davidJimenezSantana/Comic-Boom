<?php

require_once "persistencia/conexion.php";
require_once "persistencia/modelDAO/rolDAO.php";

class rol{

    private $idrol;
    private $nombre;

    private $conexion;
    private $rolDAO;

    public function __construct($idrol = 0, $nombre = "")
    {
        $this->idrol = $idrol;
        $this->nombre = $nombre;

        $this->conexion = new conexion();
        $this->rolDAO = new rolDAO($this->idrol, $this->nombre);
    }


    /**
     * Get the value of idrol
     */ 
    public function getIdrol()
    {
        return $this->idrol;
    }

    /**
     * Set the value of idrol
     */ 
    public function setIdrol($idrol)
    {
        $this->idrol = $idrol;

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

    public function consultarRol(){
        $this->conexion->abrir();
        $this->conexion->ejecutar($this->rolDAO->consultarRol());

        $resultado = $this-> conexion -> extraer();
        $this->nombre = $resultado["nombre"];

        $this->conexion->cerrar();
    }

}

?>