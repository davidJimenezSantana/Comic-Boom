<?php
include("menuAdmin.php");

if (isset($_GET["sesion"])) {
?>
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 2500,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })

        Toast.fire({
            icon: 'success',
            title: 'Se inició sesión correctamente!'
        })
    </script>

<?php
}
?>

<div class="container">
    <div class="row inicio-Admin mt-5 mb-3">
        <div class="col-9">
            <h1 style='color:snow'>Este es el inicio del administrador
            <?php
            echo $_SESSION["ID"];
            ?>
            </h1>
        </div>
        <div class="col-3">
            <div class="card text-bg-dark h-100 mt-3 ">
                <img src="vista/img/icon/comicBoomIcon.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Nombre ADMIN</h5>
                    <p class="card-text">Correo: admin@correo.com <br> </p>
                    <div>
                        <a class="btn-salir" aria-current="page" href="#">
                            <box-icon name='exit' color='#9f101a'></box-icon>Salir
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>