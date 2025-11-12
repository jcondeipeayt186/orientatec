<?php
include 'librerias/funcionesHTML.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nosotros</title>
    <?php linksBootstrapHeader(); ?>

  <style>
    h1 {
      text-align: center;
      color: #0b4f57ff;
      font-family: Arial, sans-serif;
    }

    /* 🔹 Estilo del recuadro */
    .cuadro {
      border: 3px solid #48a278ff;   /* color del borde */
      background-color: #e9f7ef;     /* color de fondo */
      border-radius: 10px;           /* bordes redondeados */
      padding: 20px;                 /* espacio interno */
      width: fit-content;            /* ancho ajustado al texto */
      margin: 20px auto;             /* centrado horizontal */
      box-shadow: 0 0 8px rgba(0, 0, 0, 0.1); /* sombra suave */
    }
      .kodfun-galeri {
    display: flex;
    height: 20rem;
    gap: 1rem;
  }

  .kodfun-galeri > div {
    flex: 1;
    border-radius: 1rem;
    background-position: center;
    background-repeat: no-repeat;
    background-size: auto 100%;
    transition: all .8s cubic-bezier(.25, .4, .45, 1.4);
  }

  .kodfun-galeri > div:hover {
    flex: 5;
  }
  </style>
</head>

<body>
 <div class="container-fluid">

  <?php
  menuNavbar("nosotros");
  // menu();
  ?>


  <?php
    echo "<h1>EQUIPO DIRECTIVO</h1>";
  ?>

  <div class="cuadro">
    <p class="h5">
      Directora: Profesora Andrea Carrió <br>
      Vicedirectora: Mariana Gracciano <br>
      Secretario: Pablo Milanesio <br>
      Coordinadora pedagógica: Profesora Luciana Sánchez Zárate
    </p>
  </div>
<div class="kodfun-galeri">
  <div style="background-image: url(img/n12\ \(10\).jpeg);"></div>
  <div style="background-image: url(img/n12\ \(17\).jpeg);"></div>
  <div style="background-image: url(img/n12\ \(5\).jpeg);"></div>
  <div style="background-image: url(img/n12\ \(4\).jpeg);"></div>
  <div style="background-image: url(img/n7.jpeg);"></div>
  <div style="background-image: url(img/n12\ \(11\).jpeg);"></div>
  <div style="background-image: url(img/n12\ \(18\).jpeg);"></div>
  <div style="background-image: url(img/n12\ \(13\).jpeg);"></div>
  <div style="background-image: url(img/n12\ \(15\).jpeg);"></div>
  <div style="background-image: url(img/n8.jpeg);"></div>
  <div style="background-image: url(img/info1.jpg);"></div>
  <div style="background-image: url(img/info2.jpg);"></div>
  <div style="background-image: url(img/info3.jpg);"></div>

</div>
 <?php 
piePaginaBootstrap();
?>
</body>
</html>