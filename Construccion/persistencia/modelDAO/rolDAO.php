<?php

class rolDAO{

    private $idrol;
    private $nombre;

    public function __construct($idrol, $nombre)
    {
        $this->idrol = $idrol;
        $this->nombre = $nombre;
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
        return "SELECT nombre
                FROM rol
                WHERE idrol = '" . $this->idrol . "'";
    }

}

?>