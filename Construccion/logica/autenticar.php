<?php

require_once "usuario.php";

$correo = "";
$clave = "";

if(isset($_POST["correo"])){
    $correo = ($_POST["correo"]);
}

if(isset($_POST["clave"])){
    $clave = ($_POST["clave"]);
}

$usuario = new usuario(0, "", "", $correo, $clave, 0, 0);

if($usuario -> autenticar()){
    echo"ok";
}else{
    echo "falla";
}

echo $correo. " ".$clave;