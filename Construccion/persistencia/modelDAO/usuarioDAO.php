<?php
class usuarioDAO
{
    private $idusuario;
    private $nombre;
    private $apellido;
    private $correo;
    private $clave;
    private $rol_idrol;
    private $estado_idestado;


    public function __construct($idusuario = 0, $nombre = "", $apellido = "", $correo = "", $clave = "", $rol_idrol = 2, $estado_idestado = 1)
    {
        $this->idusuario = $idusuario;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->correo = $correo;
        $this->clave = $clave;
        $this->rol_idrol = $rol_idrol;
        $this->estado_idestado = $estado_idestado;
    }


    public function getIdusuario()
    {
        return $this->idusuario;
    }


    public function setIdusuario($idusuario)
    {
        $this->idusuario = $idusuario;

        return $this;
    }

    public function autenticar()
    {
        return "select idusuario
                from usuario
                where correo = '" . $this->correo . "' and clave = '" . md5($this->clave) . "'";
    }

    public function consultarRol()
    {
        return "SELECT rol_idrol
                FROM usuario
                WHERE idusuario = '" . $this->idusuario . "'";
    }

    public function consultarUsuario()
    {
        return "SELECT nombre, apellido, correo, rol_idrol, estado_idestado
                FROM usuario
                where idusuario = '" . $this->idusuario . "'";
    }
}
