<?php

require_once "../persistencia/conexion.php";
require_once "../persistencia/modelDAO/usuarioDAO.php";

class usuario
{
    private $idusuario;
    private $nombre;
    private $apellido;
    private $correo;
    private $clave;
    private $rol_idrol;
    private $estado_idestado;

    private $conexion;
    private $usuarioDAO;
    
    public function __construct($idusuario, $nombre, $apellido , $correo , $clave , $rol_idrol , $estado_idestado )
    {
        $this->$idusuario = $idusuario;
        $this->$nombre = $nombre;
        $this->$apellido = $apellido;
        $this->$correo = $correo;
        $this->$clave = $clave;
        $this->$rol_idrol = $rol_idrol;
        $this->$estado_idestado = $estado_idestado;

        $this-> conexion = new conexion();
        $this-> usuarioDAO = new UsuarioDAO($this->$idusuario, $this->$nombre, $this->$apellido, $this->$correo, $this->$clave, $this->$rol_idrol, $this->$estado_idestado);

    }

    public function autenticar(){
        $this-> conexion -> abrir();
        echo $this->usuarioDAO->autenticar();
        $this-> conexion -> ejecutar($this->usuarioDAO->autenticar());

        if($this->conexion -> numResultados() == 0){
            return false;
        }else{
            $resultado = $this->conexion->extraer();
            $this->idusuario = $resultado[0];
            return true;
        }
        
    }
}
