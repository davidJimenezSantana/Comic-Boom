<?php

class estadoDAO{
    private $idestado;
    private $nombre;

    public function __construct($idestado, $nombre){
        $this->idestado=$idestado;
        $this->nombre=$nombre;
    }


    /**
     * Get the value of idestado
     */ 
    public function getIdestado()
    {
        return $this->idestado;
    }

    /**
     * Set the value of idestado
     *
     */ 
    public function setIdestado($idestado)
    {
        $this->idestado = $idestado;

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
     *
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function consultaEstado(){
        return "SELECT nombre
                FROM estado
                WHERE idestado = '" . $this->idestado . "'";
    }
}
