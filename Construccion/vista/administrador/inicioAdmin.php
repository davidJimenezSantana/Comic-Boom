<?php
include("menuAdmin.php");

if (isset($_GET["sesion"])) {
?>
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 2000,
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
            <div class="graficos">
                <h1 style='color:snow'>Bienvenido</h1>
                <canvas id="myChart" width="200" height="200"></canvas>
            </div>
        </div>

        <div class="col-3">
            <div class="card text-bg-dark perfil-user mt-4 mb-4">
                <img src="vista/img/usuarios/user1.png" width="80%" class="" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Nombre: <?php echo $usuario->getNombre() . " " . $usuario->getApellido() ?></h5>
                    <p class="card-text"> <b>Rol:</b> <?php echo $usuario->getRol()->getNombre() ?> <br> </p>
                    <p class="card-text"> <b>Correo:</b> <?php echo $usuario->getCorreo() ?> <br> </p>
                    <p class="card-text"> <b>Estado:</b> <?php echo $usuario->getEstado()->getNombre() ?> <br> </p>
                    <div class="row">
                        <div class="col-6">
                            <a class="btn-salir" aria-current="page" href="#">
                                <box-icon name='cog' color='#9f101a'></box-icon>Editar
                            </a>
                        </div>
                        <div class="col-6">
                            <a class="btn-salir" aria-current="page" href="#">
                                <box-icon name='exit' color='#9f101a'></box-icon>Salir
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<script>
    const ctx = document.getElementById('myChart');
    const myChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>