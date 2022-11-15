<?php

$usuario = new usuario($_SESSION["id"]);
$usuario->consultarUsuario();

?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="index.php?pid=<?php echo base64_encode('vista/administrador/inicioAdmin.php') ?>">
            <img src="vista/img/icon/comicBoomIcon.png" alt="Logo" width="43" height="37" class="d-inline-block align-text-top">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">

                <li class="nav-item">
                    <a class="nav-link active btn-salir" aria-current="page" href="index.php?pid=<?php echo base64_encode('vista/administrador/inicioAdmin.php') ?>">
                        <box-icon name='user-circle' color='#9f101a'></box-icon><?php echo  $usuario->getRol()->getNombre() . ": " . $usuario->getNombre() . " " . $usuario->getApellido(); ?>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active btn-salir" aria-current="page" href="index.php?pid=<?php echo base64_encode('vista/inventario/inventario.php') ?>">
                        <box-icon name='component' type='solid' color='#9f101a'></box-icon> Inventario
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Link
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Action</a></li>
                    </ul>
                </li>

            </ul>
            <div>
                <a class="btn-salir" aria-current="page" href="#">
                    <box-icon name='exit' color='#9f101a'></box-icon>Salir
                </a>
            </div>
        </div>
    </div>
</nav>