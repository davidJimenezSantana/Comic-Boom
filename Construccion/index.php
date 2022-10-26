<?php   
    session_start();
    require_once "logica/usuario.php";

    $pid = "";
    if(isset($_GET["pid"])){
        $pid = base64_decode($_GET["pid"]);
    }

    if($pid != ""){
        include($pid);
    }else{
        include ("vista/Bienvenida.php");
    }
