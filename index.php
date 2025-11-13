<?php
include 'librerias/funcionesHTML.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ORIENTATEC</title>
    <?php linksBootstrapHeader(); ?>
   
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.css" rel="stylesheet">
    
    <style>
    h1 {
      text-align: center;   /* centra el texto horizontalmente */
      color: #155f4eff;
      font-family: Arial, sans-serif;
    }
     h4 {
      text-align: center;   /* centra el texto horizontalmente */
      color: #149157ff;
      font-family: Arial, sans-serif;
    }

    /* 🔹 Logo en la esquina superior derecha */
    .logo {
      position: absolute; /* permite colocarlo libremente */
      top: 15px;          /* distancia desde arriba */
      right: 20px;        /* distancia desde la derecha */
      width: 100px;       /* tamaño del logo */
    }
     
  #calendario-container {
    width: 100%;
    height: 250px;
    font-size: 0.8em;
  }
  .fc {
    max-height: 250px;
    overflow: hidden;
  }
</style>
      </style>
</head>
<body>
  <!-- Encabezado verde -->
<!-- <div style="
  background-color: #1e7348; 
  color: white; 
  display: flex; 
  justify-content: space-between; 
  align-items: center; 
  padding: 10px 20px;
">
  <div>
    <h2 style="margin: 0;">I.P.E.A.T.y M N°186</h2>

  </div>
  <div>
    <img src="img/logo.png" alt="Logo" style="height: 60px;">
  </div>
</div> -->
  <div class="container-fluid">

  <?php
  menuNavbar("inicio");
  // menu();
  ?>
 
  <h1>ORIENTATEC</h1>

    <H4>DESCUBRI TU ORIENTACION CON UN CLICK</H4>
    <br>
   
    <div class="row">
      <div class="col-8 mr-2">
       
      <p class="h5">El establecimiento I.P.E.A.Y.T. Nº 186 “Capitán Luis Darío José Castagnari” está ubicado en la localidad de Las Higueras, al sur de la provincia de Córdoba, distante a 7 km con de la ciudad de Río Cuarto.
Se sitúa en una zona urbano-rural a ocho cuadras de la plaza central, a dos kilómetros del Área Material Río Cuarto y a dos kilómetros de la Universidad Nacional de Río Cuarto.
Debido al funcionamiento del Taller Regional Río Cuarto (hoy Área Material Río Cuarto) se instalaron una gran cantidad de familias en el pueblo. Se propició la formación técnica de jóvenes aprendices, el propósito de aplicar lo aprendido en dicho lugar.
A posterior comenzó a funcionar dentro de dicha estructura la Escuela Técnica E.N.E.T. Nº 1, hoy I.P.E.M. Nº 258 “Mayor Ing. Francisco de Arteaga”.
Con el pasar de los años, y con el crecimiento de la población, surgió la heterogeneidad en las inquietudes y decisiones, para aquellos jóvenes que no deseaban continuar sus estudios en formación técnica. De esta manera surgió la necesidad de otro establecimiento de nivel medio, para evitar el traslado de los jóvenes de la localidad a la ciudad. Así un grupo de padres y vecinos iniciaron las gestiones para llevar a cabo el proyecto. 
</p>

            <div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/cole.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/cartel.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/mano.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/IMG_6873.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/8.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  </div>
        </div>            

      <div class="col-4">

      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d835.5994403103864!2d-64.29250130717956!3d-33.09862524328969!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95cdffb30cb1a365%3A0xf6ab5e324290a73e!2sEscuela%20Capitan%20Castagnari!5e0!3m2!1ses-419!2sar!4v1760988914962!5m2!1ses-419!2sar" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <!-- Calendario -->
<div id="calendario-container" style="width: 300px; height: 300px; margin: 10px auto;">
          <div id="calendar"></div>
        </div>
      </div>
 </div>

<!-- ✅ JS de Bootstrap y FullCalendar -->
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'dayGridMonth',
      locale: 'es',
      themeSystem: 'bootstrap5',
      headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,listWeek'
      },
      events: 'eventos.php' // Ruta a tu archivo PHP con los eventos
    });
    calendar.render();
  });
</script>

<br>
<?php 
piePaginaBootstrap();
?>
    </div>
</body>
</html>