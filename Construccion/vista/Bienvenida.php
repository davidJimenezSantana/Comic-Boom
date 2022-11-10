    <div class="container">
        <div class="con-inicio">
            <div class="row ini">
                <div class="col-12 col-lg-8">
                    <div class="container-carrusel">
                        <div class="tit-inicio">
                            <img src="vista/img/icon/comicBoomIcon.png" alt="Comic Boom">
                            <h1>!Comic Boom!</h1>
                        </div>
                        <div class="cont-carrusel mb-3">
                            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="vista/img/carrusel/c-1.jpg" class="d-block w-100 rounded mx-auto " alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="vista/img/carrusel/c-2.jpg" class="d-block w-100 rounded mx-auto" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="vista/img/carrusel/c-3.jpg" class="d-block w-100 rounded mx-auto" alt="...">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card card-login" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Ingresar</h5>
                            <form action="index.php?pid=<?php echo base64_encode('logica/autenticar.php')?>" method="post">
                                <div class="mb-3">
                                    <label for="correo" class="form-label">Correo: </label>
                                    <input type="email" class="form-control" id="correo" name="correo" placeholder="ejemplo@correo.com">
                                </div>
                                <div class="mb-3">
                                    <label for="clave" class="form-label">Clave: </label>
                                    <input type="password" class="form-control" id="clave" name="clave" placeholder="************">
                                </div>
                                <button class="boton btn-ent" type="submit" class="btn btn-primary">Entrar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php
        if (isset($_GET["invalid"])) {
        ?>
            <script>
                Swal.fire({
                    title: 'Error!',
                    text: 'Los datos que ingresaste son incorrectos',
                    icon: 'error',
                    confirmButtonText: 'ok'
                })
            </script>
        <?php
        }
        ?>

    </div>


