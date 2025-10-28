<?php
include 'librerias/funcionesHTML.php';//digo que puedo usar lo que se encuentre en ese archivo
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">    

<?php linksBootstrap() ?> <!-- hago uso de la función que está definida en funcionesHTML.php -->

    <title>Prueba de uso de funciones</title>


 <!-- CDN oficial de Chart.js -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <style>
    
    canvas {
      max-width: 400px;
      margin: auto;
      background: white;
      padding: 20px;
      border-radius: 12px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
  </style>


</head>


<body>
<?php if (isset($_POST["usuario"])){ //isset controla si existe el parametro utilizado con GET o POST

    $contadorAgro= 0;
    $contadorInfo= 0;
    $contadorEco= 0;

    $usuario = $_POST["usuario"];
    
    $rp1 = $_POST["pregunta1"];
    $rp2 = $_POST["pregunta2"];
    $rp3 = $_POST["pregunta3"];

 }

    if($rp1 == "agro"){
        $contadorAgro++;
    }elseif($rp1 == "info"){
        $contadorInfo++;
    }elseif($rp1 == "eco"){
        $contadorEco++;
    }

    if($rp2 == "agro"){
        $contadorAgro++;
    }elseif($rp2 == "info"){
        $contadorInfo++;
    }elseif($rp2 == "eco"){
        $contadorEco++;
    }

    if($rp3 == "agro"){
        $contadorAgro++;
    }elseif($rp3 == "info"){
        $contadorInfo++;
    }elseif($rp3 == "eco"){
        $contadorEco++;
    }
    

 ?>


<div class="container-fluid">
<h1>Muchas Gracias <?php echo $usuario?>!!! </h1>

<?php
 echo alertaBootstrap("Te contamos sobre tu respuesta");
?>


<p>Los datos ingresados son:</p>
<ul>
<li>Usuario: <b>  <?php echo $usuario?> </b></li>

<li>respuesta 1: <b> <?php echo $rp1?> </b></li>
<li>respuesta 2: <b> <?php echo $rp2?> </b></li>

<li>Cantidad de Agro: <b> <?php echo $contadorAgro?> </b></li>
<li>Cantidad de Info: <b> <?php echo $contadorInfo?> </b></li>
<li>Cantidad de Eco: <b> <?php echo $contadorEco?> </b></li>

</ul>

<canvas id="miGrafico"></canvas>

  <script>
    // Obtenemos el contexto del canvas
    const ctx = document.getElementById('miGrafico');

    // Creamos el gráfico tipo "doughnut"
    new Chart(ctx, {
      type: 'doughnut',
      data: {
        labels: ['Agro', 'Informática', 'Economía'],
        datasets: [{
          label: 'Cantidad de proyectos',
          data: [<?php echo $contadorAgro?>, <?php echo $contadorInfo?>, <?php echo $contadorEco?>], // valores de ejemplo
          backgroundColor: [
            'rgba(75, 192, 192, 0.7)',  // verde-agua (Agro)
            'rgba(54, 162, 235, 0.7)',  // azul (Informática)
            'rgba(255, 206, 86, 0.7)'   // amarillo (Economía)
          ],
          borderColor: [
            'rgba(75, 192, 192, 1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)'
          ],
          borderWidth: 1
        }]
      },
      options: {
        responsive: true,
        plugins: {
          legend: {
            position: 'bottom'
          },
          title: {
            display: true,
            text: 'Proporción de tus respuestas sobre las áreas temáticas'
          }
        }
      }
    });
  </script>
 

<a href="preguntas.php">Ir al formulario de preguntas</a>

<br>

<?php piePagina() ?>

</div>
</body>
</html>