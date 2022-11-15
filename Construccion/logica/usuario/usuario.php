<?php

require_once "persistencia/conexion.php";
require_once "persistencia/modelDAO/usuarioDAO.php";
require_once "rol.php";
require_once "estado.php";

class usuario
{
    private $idusuario;
    private $nombre;
    private $apellido;
    private $correo;
    private $clave;
    private $rol;
    private $estado;
    private $conexion;
    private $usuarioDAO;

    public function __construct($idusuario = 0, $nombre = "", $apellido = "", $correo = "", $clave = "", $rol_idrol = 0, $estado_idestado = 0)
    {
        $this->idusuario = $idusuario;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->correo = $correo;
        $this->clave = $clave;
        $this->rol = new rol($rol_idrol);
        $this->estado = new estado($estado_idestado);

        $this->conexion = new conexion();
        $this->usuarioDAO = new UsuarioDAO($this->idusuario, $this->nombre, $this->apellido, $this->correo, $this->clave, $rol_idrol, $estado_idestado);
    }


    public function getCorreo()
    {
        return $this->correo;
    }

    /**
     * Get the value of idusuario
     */
    public function getIdusuario()
    {
        return $this->idusuario;
    }

    /**
     * Get the value of nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Get the value of apellido
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Get the value of rol
     */ 
    public function getRol()
    {
        return $this->rol;
    }

    /**
     * Get the value of estado
     */ 
    public function getEstado()
    {
        return $this->estado;
    }



    public function autenticar()
    {
        $this->conexion->abrir();
        $this->conexion->ejecutar($this->usuarioDAO->autenticar());

        if ($this->conexion->numResultados() == 0) {
            return false;
        } else {
            $resultado = $this->conexion->extraer();
            $this->idusuario = $resultado["idusuario"];
            return true;
        }

        $this->conexion->cerrar();
    }

    public function consultarRol()
    {

        $this->conexion->abrir();
        $this->usuarioDAO->setIdusuario($this->idusuario);
        $this->conexion->ejecutar($this->usuarioDAO->consultarRol());

        $resultado = $this->conexion->extraer();

        $this-> rol = new rol($resultado["rol_idrol"]) ;
        $this->conexion->cerrar();
    }

    public function consultarUsuario()
    {
        $this->conexion->abrir();
        $this->conexion->ejecutar($this->usuarioDAO->consultarUsuario());

        $resultado = $this->conexion->extraer();
        $this -> nombre = $resultado["nombre"];
        $this -> apellido = $resultado["apellido"];       
        $this -> correo = $resultado["correo"]; 
        $this -> rol = new rol($resultado["rol_idrol"]);
        $this -> estado = new estado($resultado["estado_idestado"]); 

        $this->rol->consultarRol();
        $this->estado->consultaEstado();

        $this->conexion->cerrar();    

    }

    
}
