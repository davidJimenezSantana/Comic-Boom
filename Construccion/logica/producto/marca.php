<?php

require_once "persistencia/conexion.php";
require_once "persistencia/modelDAO/marcaDAO.php";

class marca
{
    private $idmarca;
    private $nombre;

    private $conexion;
    private $marcaDAO;

    public function __construct($idmarca =0, $nombre = "")
    {
        $this->idmarca = $idmarca;
        $this->nombre = $nombre;

        $this->conexion = new conexion();
        $this->marcaDAO = new marcaDAO($this->idmarca, $this->nombre);

    }


    /**
     * Get the value of idmarca
     */
    public function getIdmarca()
    {
        return $this->idmarca;
    }

    /**
     * Set the value of idmarca
     */
    public function setIdmarca($idmarca)
    {
        $this->idmarca = $idmarca;

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

    public function consultarMarca()
    {
        $this->conexion->abrir();
        $this->conexion->ejecutar($this->marcaDAO->consultarMarca());
        $resultado = $this->conexion->extraer();
        $this->nombre = $resultado["nombre"];
        $this->conexion->cerrar();
    }
}
