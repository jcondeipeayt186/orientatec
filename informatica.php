<?php
include 'librerias/funcionesHTML.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>informatica</title>
    <?php linksBootstrapHeader(); ?>
    <link rel="stylesheet" href="css/miEstilo.css">
</head>
<body>
  <div class="container-fluid">

  <?php
  menuNavbar("info");
  
  ?>
    <div class="clearfix">
    <h1  class= text-center   style= "border:2px solid #D7E8BC;color:#6F8D6A;"     >  Perfil profesional de Técnico en Informática
    y Personal </h1>
<br>
<br>

  <H5 > El Técnico en Informática Profesional y Personal al culminar el Nivel Secundario de la Modalidad de Educación Técnico Profesional habrá desarrollado las siguientes competencias profesionales:
<br>
<br><img src=  "  img/robot.jpg   "    class="rounded float-end" alt="..." width="400" height="400">
•	Facilitar la operatoria del usuario.
<br>

•	Mantener la integridad de los datos locales del usuario.
<br>

•	Instalar y poner en marcha componentes o sistemas, equipos y redes.
<br>

•	Mantener equipos y sistemas de baja complejidad o componentes de los mismos.
<br>

•	Optimizar el ambiente informático de trabajo del usuario.
<br>

•	Asesorar y apoyar en la compra y en la venta de productos o servicios informáticos.
<br>

•	Participar en el análisis y/o diseño y/o ejecución de proyectos tecnológicos productivos.
<br>

•	Colaborar en el asesoramiento técnico y participar en los procesos de gestión y comercialización de bienes y servicios.
<br>

•	Comprender el marco jurídico regulatorio de las actividades productivas en relación con la informática.
<br>

•	Poseer conocimientos básicos de Inglés Técnico.
<br>

•	Aplicar conocimientos de Estadística.
<br> 
<br>
<br>
El Técnico en Informática Profesional y Personal está capacitado para asistir al usuario de productos y servicios informáticos brindándole servicios de instalación, capacitación, sistematización, mantenimiento primario,<br>
 resolución de problemas derivados de la operatoria, y apoyo a la contratación de productos <br>
 o servicios informáticos, desarrollando las actividades descriptas en su perfil profesional 
 <br>
 y pudiendo actuar de nexo entre el especialista o experto en el tema, producto o  <br>
 servicio y el usuario final.
       " </H5>
       <h5 style="background-color:#D7E8BC;"> La especialidad de Tecnico en Informatica dura 7 años </h5>

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
      <img src=" img/cables.jpg " class="col-md-6 float-md-end mb-3 ms-md-3 " alt=""  width="500" height="400"  >
    </div>

    <div class="carousel-item">
      <img src=" img/compu2.jpg   " class=" col-md-6 float-md-end mb-3 ms-md-3    " alt="" width="500" height="400"  >
    </div>

 <div class="carousel-item">
   <img src="  img/filamento.jpg " class=" col-md-6 float-md-end mb-3 ms-md-3  " alt="" width="500" height="400"   >
</div>

<div class="carousel-item">
 <img src="   img/robot pista.png  " class="  col-md-6 float-md-end mb-3 ms-md-3    " alt=""  width="500" height="400"   >
</div> 
<div class="carousel-item">
 <img src="  img/4.jpg   " class="  col-md-6 float-md-end mb-3 ms-md-3    " alt=""  width="500" height="400"   >
</div> 
<div class="carousel-item">
 <img src="  img/IMG_8319.jpg  " class="  col-md-6 float-md-end mb-3 ms-md-3    " alt=""  width="500" height="400"   >
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

 <?php 
piePaginaBootstrap();
?>
</body>
</html>