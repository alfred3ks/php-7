<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Plantilla animales</title>

  <?php
  if (isset($_GET['animal'])) {
    $animal = $_GET['animal'];

    if ($animal == 1) {
      $titulo = "Perro";
      $mensaje = "Guau guau..";
      $imagen = "perro.png";
    }
    if ($animal == 2) {
      $titulo = "Gato";
      $mensaje = "Miuuuu...";
      $imagen = "gato.png";
    }
    if ($animal == 3) {
      $titulo = "Gallo";
      $mensaje = "Kikiriki...";
      $imagen = "gallo.png";
    }
    if ($animal == 4) {
      $titulo = "Águila";
      $mensaje = "Ziuzzzz...";
      $imagen = "aguila.png";
    }
  }
  ?>

</head>

<body>
  <h1>Soy un <?php echo $titulo . " " . $mensaje; ?></h1>
  <img src="<?php echo 'img/' . $imagen ?>" alt="<?php echo $titulo ?>">
</body>

</html>