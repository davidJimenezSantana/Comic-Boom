<?php
class marcaDAO
{
    private $idmarca;
    private $nombre;

    public function __construct($idmarca, $nombre)
    {
        $this->idmarca = $idmarca;
        $this->nombre = $nombre;
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
        return "SELECT nombre 
            FROM marca 
            WHERE idmarca = '" . $this->idmarca . "'";
    }
}
