<?php
include 'librerias/funcionesHTML.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bachiller</title>
    <?php linksBootstrapHeader(); ?>
    <link rel="stylesheet" href="css/miEstilo.css">
</head>

<body >
  <div class="container-fluid">

  <?php
  menuNavbar("eco");
  
  ?>
    <div class="clearfix">
    <h1  class= text-center   style= "border:2px solid #D7E8BC;color:#6F8D6A;"     > Bachiller en economia  </h1>
<br>
    <h5  style=   "border:2px solid #D7E8BC;color:#6F8D6A;" >  ¿De que trata la orientacion?</h5>
  
    <h5>Como funciona la empresa, que es el dinero, como administrar recursos,como funciona la economia, que es el estado y como funciona , movimientos de dinero en empresas
    <br>  </h5>
   <h5>   La Orientación en Economía y Administración busca que los estudiantes comprendan los procesos económicos y organizacionales,
     junto con sus aspectos administrativos y de gestión. 
    Se enfoca en las Ciencias Económicas (Contabilidad, Administración, Economía y Derecho) desde una mirada integral y práctica.
El objetivo es que los alumnos desarrollen capacidades para comunicarse, estudiar, trabajar y participar activamente en la sociedad
<br>
<img src=" img/Economia-1.jpg    " class="rounded float-end" alt="..." width="400" height="200"> 
Al egresar, los estudiantes deben ser capaces de:
    <br>
	•	Comprender y producir textos orales y escritos.
    <br>
	•	Explicar y relacionar hechos económicos y sociales usando teorías y modelos.
    <br>
	•	Participar en procesos económicos y organizacionales con pensamiento crítico y creativo.
    <br>
	•	Usar estrategias para buscar, analizar y comunicar información.
    <br>
	•	Resolver problemas con autonomía y creatividad.
    <br>
	•	Trabajar en equipo y valorar el impacto de la tecnología.
    <br>
	•	Conocer sus derechos y deberes laborales.
    <br>
  •	Responsabilidad, ética y compromiso social.
    <br> 
</h5>

<br>
<br>

<h5  style=   "border:2px solid #D7E8BC;color:#6F8D6A;"     > MATERIAS CLAVES QUE SE APRENDEN:  </h5>


<h5    >Economia: Como funcionan los estados, las empresas y las familias
con la administración de los recursos?

Administración: Como organizar y dirigir empresas o proyectos

Sistemas de información contable: Se tratan los temas
relacionados con los sistemas utilizados para la registración</h5>
<h5 style="background-color:#D7E8BC;"> La especialidad de Bachiller en economia dura 6 años   </h5>









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
      <img src="  img/Titulo-Eco.jpeg   " class="col-md-6 float-md-end mb-3 ms-md-3 " alt=""  width="500" height="400"  >
    </div>

    <div class="carousel-item">
      <img src="  img/Economia-2.jpg    " class=" col-md-6 float-md-end mb-3 ms-md-3    " alt="" width="500" height="400"  >
    </div>

 <div class="carousel-item">
   <img src="  img/Calculos-Eco.jpeg  " class=" col-md-6 float-md-end mb-3 ms-md-3  " alt="" width="500" height="400"   >
</div>

<div class="carousel-item">
 <img src="  img/Grafico barra-Eco.jpeg  " class="  col-md-6 float-md-end mb-3 ms-md-3    " alt=""  width="500" height="400"   >
</div> 

<div class="carousel-item">
 <img src="    img/bachiller.jpg  " class="   col-md-6 float-md-end mb-3 ms-md-3   " alt=""  width="500" height="400"   >
</div> 

<div class="carousel-item">
<img src="    img/Bachiller-2.jpg " class=" col-md-6 float-md-end mb-3 ms-md-3    " alt=""  width="500" height="400"   >
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
