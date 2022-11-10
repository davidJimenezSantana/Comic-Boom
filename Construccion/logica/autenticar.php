<?php

$correo = "";
$clave = "";

if(isset($_POST["correo"])){
    $correo = ($_POST["correo"]);
}

if(isset($_POST["clave"])){
    $clave = ($_POST["clave"]);
}

$u = new usuario(0, "", "", $correo, $clave, 0, 0);

if($u -> autenticar()){

    $_SESSION["ID"] = $u -> getIdusuario(); 
    $u -> consultarRol();

    if($u -> getRol_idrol() == 1){
        header("Location: index.php?sesion&pid=" . base64_encode("vista/administrador/inicioAdmin.php"));
    }else if($u -> getRol_idrol() == 2){
        header("Location: index.php?sesion&pid=" . base64_encode("vista/cliente/inicioCliente.php"));
    }
    
    
}else{
    header("Location: index.php?invalid");
}
