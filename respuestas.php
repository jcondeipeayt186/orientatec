<?php
include 'librerias/funcionesHTML.php';
include 'librerias/basededatos.php';//digo que puedo usar lo que se encuentre en ese archivo

// Procesar respuestas del formulario

    $contadorAgro= 0;
    $contadorInfo= 0;
    $contadorEco= 0;

    $usuario = isset($_POST["Usuario"]) ? $_POST["Usuario"] : "";


    $respuestas = array();
    for ($i = 1; $i <= 13; $i++) {
        $clave = "pregunta".$i;
        $respuestas[$i] = isset($_POST[$clave]) ? $_POST[$clave] : "";
    }
    
    
    // Contar respuestas por categoría
    foreach ($respuestas as $respuesta) {
        
        if ($respuesta === "agro") {
            $contadorAgro++;
        } elseif ($respuesta === "info") {
            $contadorInfo++;
        } elseif ($respuesta === "eco") {
            $contadorEco++;
        }
    }


//insertar en BD Orientatec
$link=conectarBD();
foreach ($respuestas as $respuesta) {
        $sqlResp = "INSERT INTO `respuestas` ( `opcion_elegida`, `usuario`) VALUES ('".mysqli_real_escape_string($link, $respuesta)."', '".mysqli_real_escape_string($link, $usuario)."')";
        $okResp = mysqli_query($link, $sqlResp);

/*¿Cómo funciona mysqli_real_escape_string?
Qué hace: Escapa caracteres especiales en una cadena para que sea segura al construir consultas SQL. Previene inyecciones SQL cuando concatenas valores en el SQL.
Cómo funciona: Inserta barras invertidas delante de caracteres peligrosos según el conjunto de caracteres actual de la conexión MySQL (comillas simples/dobles, barra invertida, NULL, etc.).
Requisito: Necesita una conexión MySQL activa y válida, y que el charset esté configurado correctamente en esa conexión*/
        
        if(!$okResp){
            die('Error insertando respuestas: '.mysqli_error($link));
        }
    }
 
desconectarBD($link);

// Determinar especialidad elegida
        $elegido="";
        if ($contadorAgro > $contadorInfo && $contadorAgro > $contadorEco){
            $elegido="tu interés en el área de Bachiller en Bioagroindustrias";}
        elseif ($contadorInfo >$contadorAgro && $contadorInfo > $contadorEco){
            $elegido="tu interés en el área de Técnico en Informática Profesional y Personal";}
        elseif ($contadorEco> $contadorAgro && $contadorEco > $contadorInfo){
            $elegido="tu interés en el área de Bachiller en Economía y Administración";
        }else{
            $elegido="tu interés en dos áreas de preferencias por igual. Sugerimos visiten las páginas de la especialidad.";
        }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>orientatec</title>
    <?php linksBootstrapHeader(); ?>
</head>


<body>
    <div class="container-fluid">

  <?php
  menuNavbar("orientacion");
  // menu();
  ?>

<div class="container-fluid">
<h1>Muchas Gracias <?php echo htmlspecialchars($usuario); ?>!</h1> 



<div class="alert alert-success mb-5" role="alert">
        <h4 class="alert-heading">¡Registramos tu respuesta!</h4>
        <p>Muchas gracias por participar de Orientatec.</p>
        <hr>
        <p class="mb-0">Queremos agradecerte por tu compromiso y dedicación a lo largo de este proceso. A través de tu participación y desempeño, hemos podido ver con claridad tu entusiasmo,<span class="fw-bold"> <?= $elegido ?></span>.</p>
    </div>



<div class="card mb-4">
    <div class="card-header">
        <h5 class="mb-0">Resultado de tu evaluación</h5>
    </div>
    <div class="card-body">
        <div class="row mb-3">
            <div class="col-12">
                <div class="d-flex justify-content-center flex-wrap gap-3">
                    <div class="d-flex align-items-center">
                        <span style="display: inline-block; background-color: rgba(255, 206, 86, 0.7); width: 25px; height: 25px; border: 3px solid rgba(255, 206, 86, 1); border-radius: 4px; margin-right: 8px;"></span>
                        <span>Economía</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <span style="display: inline-block; background-color: rgba(54, 162, 235, 0.7); width: 25px; height: 25px; border: 3px solid rgba(54, 162, 235, 1); border-radius: 4px; margin-right: 8px;"></span>
                        <span>Informática</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <span style="display: inline-block; background-color: rgba(75, 192, 192, 0.7); width: 25px; height: 25px; border: 3px solid rgba(75, 192, 192, 1); border-radius: 4px; margin-right: 8px;"></span>
                        <span>Bioagroindustria</span>
                    </div>
                </div>
            </div>
        </div>
        <canvas id="myChart"></canvas>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Economía', 'Informática', 'Bioagroindustria'],
      datasets: [{
        label: 'Puntos obtenidos',
        data: [<?php echo $contadorEco ?>, <?php echo $contadorInfo ?>, <?php echo $contadorAgro ?>],
        backgroundColor: [
          'rgba(255, 206, 86, 0.7)',
          'rgba(54, 162, 235, 0.7)',
          'rgba(75, 192, 192, 0.7)'
        ],
        borderColor: [
          'rgba(255, 206, 86, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(75, 192, 192, 1)'
        ],
        borderWidth: 2
      }]
    },
    options: {
      responsive: true,
      plugins: {
        legend: {
          display: false
        },
        tooltip: {
          backgroundColor: 'rgba(0, 0, 0, 0.8)',
          padding: 12,
          titleFont: {
            size: 14
          },
          bodyFont: {
            size: 13
          }
        }
      },
      scales: {
        y: {
          beginAtZero: true,
          ticks: {
            stepSize: 1
          },
          title: {
            display: true,
            text: 'Cantidad de respuestas'
          }
        },
        x: {
          title: {
            display: true,
            text: 'Especialidades'
          }
        }
      }
    }
  });
</script>

   
    


<br>

<?php piePaginaBootstrap(); ?>

</div>
</body>
</html>