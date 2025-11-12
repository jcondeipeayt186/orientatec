<?php
include 'librerias/funcionesHTML.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bioagro</title>
    <?php linksBootstrapHeader(); ?>
    <link rel="stylesheet" href="css/miEstilo.css">
</head>
<body>
   <div class="container-fluid">

  <?php
  menuNavbar("agro");
  
  ?>
   
    <h1  class= text-center   style= "border:2px solid #D7E8BC;color:#6F8D6A;"     >  Especialidad de Bachiller en Bioagroindustria</h1>
    <div class="container mt-5">
    <div class="d-flex align-items-center">


<h5>    La especialidad “Bachiller con Formación Profesional en 
    Bioagroindustria” se incorpora como una nueva orientación de la secundaria 
    con formación profesional en Córdoba.
    <br>
    Su objetivo es formar jóvenes con conocimientos técnicos y competencias
    vinculadas al sector agroindustrial, desde la producción hasta la transformación
      de productos, con un fuerte enfoque en sostenibilidad, optimización de recursos y biodiversidad. </h5>
  
<img src=" img/pollo.jpg " class="rounded float-end" alt="..." width="400" height="200">
    </div>
  </div>
<br>
<br> 
 <h5 style=   "border:2px solid #D7E8BC;color:#6F8D6A;"         >Al finalizar la formación, se espera que el egresado/a de esta especialidad esté en condiciones de:</h5>
    <br>
<h5> 
•Participar en procesos de producción agroindustrial, entendiendo las etapas desde la materia prima hasta la transformación y agregado de valor. 
<br>
•Aplicar criterios de optimización de recursos (agua, suelo, energía) en contextos agroindustriales, contemplando la eficiencia y la reducción del impacto ambiental. 
<br>
•Tener una mirada de respeto por la biodiversidad, pensar procesos productivos que valoricen la naturaleza y los entornos, entendiendo la agroindustria en un marco sustentable. 
<br>
•Utilizar conocimientos técnicos y tecnológicos para analizar, mejorar procesos productivos, manejar herramientas modernas vinculadas a producción agroindustrial.
<br>
•Adoptar actitudes de compromiso ético y ciudadano, específicamente en cuanto a la conservación ambiental, la producción responsable y el rol que tienen los procesos productivos en la sociedad.</p>

<h5 style="background-color:#D7E8BC;"> La especialidad de bioagro industria dura 6 años   </h5>

<div id="carouselExampleIndicators" class="carousel slide"      >
  <div class="carousel-indicators"  class= text-center     >
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
     <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
     <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
  
     <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
     <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 7"></button>
</div>
  <div class="carousel-inner">

    <div class="carousel-item active">
      <img src=" img/cartel agro.jpg " class="col-md-6 float-md-end mb-3 ms-md-3 " alt=""  width="500" height="400"  >
    </div>

    <div class="carousel-item">
      <img src="img/flor.jpg  " class=" col-md-6 float-md-end mb-3 ms-md-3    " alt="" width="500" height="400"  >
    </div>

 <div class="carousel-item">
   <img src=" img/huevos.png   " class=" col-md-6 float-md-end mb-3 ms-md-3  " alt="" width="500" height="400"   >
</div>

<div class="carousel-item">
 <img src="img/dulces.jpg " class="  col-md-6 float-md-end mb-3 ms-md-3    " alt=""  width="500" height="400"   >
</div> 

<div class="carousel-item">
 <img src=" img/lechuga.jpeg" class="   col-md-6 float-md-end mb-3 ms-md-3   " alt=""  width="500" height="400"   >
</div> 

<div class="carousel-item">
<img src="  img/agro5.jpg     " class=" col-md-6 float-md-end mb-3 ms-md-3    " alt=""  width="500" height="400"   >
</div> 


  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>




</div>
 <?php 
piePaginaBootstrap();
?>
</body>
</html>


  
