<!DOCTYPE html>
<html lang="es">

<head>
  <?php require "head.php"; ?>
  <link rel="stylesheet" href="estilos.css">
</head>

<body>
  <?php require "nav.php"; ?>

  <div class="container mt-5">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title titulo">LOGOUT Donantes Aferesis</h5>
        <p class="card-text">Cerrando la sesión...</p>
      </div>
    </div>
  </div>

  <?php header('Refresh: 2; URL = index.php'); ?>
</body>

</html>