<?php
require_once "persistencia/conexion.php";
require_once "persistencia/modelDAO/estadoDAO.php";

class estado
{
    private $idestado;
    private $nombre;
    private $conexion;
    private $estadoDAO;


    public function __construct($idestado = 0, $nombre = "")
    {
        $this->idestado = $idestado;
        $this->nombre = $nombre;
        $this->conexion= new conexion();
        $this->estadoDAO = new estadoDAO($this->idestado, $this->nombre);
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

    public function consultaEstado()
    {
        $this->conexion->abrir();
        $this->conexion->ejecutar($this->estadoDAO->consultaEstado());
        $resultado = $this->conexion->extraer();
        $this->nombre=$resultado["nombre"];
        $this->conexion->cerrar();
    }
}
