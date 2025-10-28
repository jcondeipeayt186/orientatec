<?php
include 'librerias/funcionesHTML.php';//digo que puedo usar lo que se encuentre en ese archivo
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">    

<?php linksBootstrap() ?> <!-- hago uso de la función que está definida en funcionesHTML.php -->

    <title>Prueba de uso de funciones</title>
</head>
<body>
<div class="container-fluid">
<h1>Página Formulario</h1>

<?php echo alertaBootstrap("Probando el formulario") ?>


<form action="respuestas.php" name="formulario1" method="POST">

<div class="form-group">
      <label for="exampleInputUsuario">Usuario</label>
      <input type="text" name="usuario" class="form-control" id="exampleInputUsuario" placeholder="usuario" required="">
    </div>


    <label for="fav_language">P1 - Elemento Favorito:</label><br>

    <div class="form-check">
        <input class="form-check-input" type="radio" name="pregunta1" id="rp1_1" value="agro">
        <label class="form-check-label" for="flexRadioDefault1">Vaca</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="pregunta1" id="rp1_2" value="info">
        <label class="form-check-label" for="flexRadioDefault2">Compu</label>
    </div>
       <div class="form-check">
        <input class="form-check-input" type="radio" name="pregunta1" id="rp1_3" value="eco">
        <label class="form-check-label" for="flexRadioDefault3">Calculadora</label>
    </div>

    <br>

    <label for="fav_language">P2 - Espacio:</label><br>

    <div class="form-check">
        <input class="form-check-input" type="radio" name="pregunta2" id="flexRadioDefault1" value="agro">
        <label class="form-check-label" for="flexRadioDefault1">Campo</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="pregunta2" id="flexRadioDefault2" value="info" checked>
        <label class="form-check-label" for="flexRadioDefault2">Laboratorio</label>
    </div>
       <div class="form-check">
        <input class="form-check-input" type="radio" name="pregunta2" id="flexRadioDefault3" value="eco" checked>
        <label class="form-check-label" for="flexRadioDefault3">Oficina</label>
    </div>

       
    <button type="submit" class="btn btn-outline-primary">Ingresar</button>

</form>

<br>

<?php piePagina() ?>

</div>
</body>
</html>