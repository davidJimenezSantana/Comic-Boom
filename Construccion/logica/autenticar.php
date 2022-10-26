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
    header("Location: index.php?pid=" . base64_encode("vista/administrador/inicioAdmin.php"));
}else{
    header("Location: index.php?invalid");
}
