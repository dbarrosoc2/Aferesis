<!DOCTYPE html>
<html lang="en">
<?php
session_start();
$title = "Listar Usuario";
require_once "./head.php";
require "./Usuarios.php";
$usuario = new Usuarios();
?>

<body class="sb-nav-fixed">
    <?php
    require_once "./nav.php";
    require_once "./aside.php";
    ?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">
                    <?= $title ?>
                </h1>

                <?php
                // Imprimir la lista de usuarios
                echo $usuario->listarUsuarios();
                ?>




            </div>
        </main>
        <?php
        require_once "./footer.php";
        ?>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
        crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>