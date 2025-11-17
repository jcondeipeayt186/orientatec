<?php
// require_once __DIR__. "/librerias/libBD.php";
include 'librerias/basededatos.php';
include 'librerias/funcionesHTML.php';

$link = conectarBD();

$qFormularios = mysqli_query($link, "SELECT COUNT(DISTINCT usuario) AS c FROM respuestas");
$totalFormularios = ($qFormularios && ($r=mysqli_fetch_assoc($qFormularios))) ? intval($r['c']) : 0;

$qTotResp = mysqli_query($link, "SELECT COUNT(*) AS c FROM respuestas");
$totalRespuestas = ($qTotResp && ($r=mysqli_fetch_assoc($qTotResp))) ? intval($r['c']) : 0;
$agro = 0; $info = 0; $eco = 0;

if ($totalRespuestas > 0){
  $qr = mysqli_query($link, "SELECT opcion_elegida, COUNT(*) c FROM respuestas GROUP BY opcion_elegida");
  while($row = $qr ? mysqli_fetch_assoc($qr) : null){;
    if (!$row) break;
    $opt = strtolower(trim($row['opcion_elegida']));
                                                                             
    
    if ($opt === 'agro') { $agro = intval($row['c']); }
    else if ($opt === 'info' || $opt === 'informatica' || $opt === 'informática') { $info = intval($row['c']); }
    else if ($opt === 'eco' || $opt === 'economicas' || $opt === 'económicas') { $eco = intval($row['c']); }
  }
}


function pct($num, $den){ return $den > 0 ? round(($num*100.0)/$den, 2) : 0; }


$pAgro = pct($agro, $totalRespuestas);
$pInfo = pct($info, $totalRespuestas);
$pEco  = pct($eco, $totalRespuestas);

// Obtener nombres de usuario para la nube de palabras
$usuariosNube = array();
$qUsuarios = mysqli_query($link, "SELECT usuario, COUNT(*) as frecuencia FROM respuestas WHERE usuario IS NOT NULL AND usuario != '' GROUP BY usuario ORDER BY frecuencia DESC");
if ($qUsuarios) {
    while($row = mysqli_fetch_assoc($qUsuarios)) {
        $usuariosNube[] = array(
            'nombre' => htmlspecialchars($row['usuario'], ENT_QUOTES, 'UTF-8'),
            'frecuencia' => intval($row['frecuencia'])
        );
    }
}

// DEBUG: Mostrar arreglo usuariosNube (comentar en producción)
error_log("DEBUG usuariosNube: " . print_r($usuariosNube, true));
error_log("DEBUG total usuarios: " . count($usuariosNube));

desconectarBD($link); 

?>
<!DOCTYPE html> <!-- Declaración de documento HTML -->
<html lang="es"> <!-- Idioma español -->
<head> <!-- Cabecera del documento -->
  <meta charset="UTF-8"> <!-- Codificación -->
  <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Responsive -->
  <title>Histórico de Respuestas</title> <!-- Título de la página -->
  <?php linksBootstrapHeader(); ?> <!-- CSS Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> <!-- Librería Chart.js -->
</head> <!-- Fin head -->
<body> <!-- Cuerpo con fondo claro -->
    <div class="container-fluid">

  <?php
  menuNavbar("historial");
  // menu();
  ?>
    <h1 class="mb-4">Orientatec: Resumen histórico</h1> <!-- Título principal -->

    <div class="row g-3 mb-4"> <!-- Fila de tarjetas resumen -->
    <div class="col-md-4"> <!-- Columna 1 -->
        <div class="card text-center"> <!-- Tarjeta -->
          <div class="card-body"> <!-- Cuerpo tarjeta -->
            <h6 class="text-muted mb-1">Formularios respondidos</h6> <!-- Etiqueta -->
            <div class="display-5 fw-bold"><?php echo round($totalRespuestas/13,2); ?></div> <!-- Valor formularios -->
          </div> <!-- Fin cuerpo -->
        </div> <!-- Fin tarjeta -->
      </div> <!-- Fin columna -->
      <div class="col-md-4"> <!-- Columna 2 -->
        <div class="card text-center"> <!-- Tarjeta -->
          <div class="card-body"> <!-- Cuerpo tarjeta -->
            <h6 class="text-muted mb-1">Personas que respondieron</h6> <!-- Etiqueta -->
            <div class="display-5 fw-bold"><?php echo $totalFormularios; ?></div> <!-- Valor formularios -->
          </div> <!-- Fin cuerpo -->
        </div> <!-- Fin tarjeta -->
      </div> <!-- Fin columna -->
      <div class="col-md-4"> <!-- Columna 3 -->
        <div class="card text-center"> <!-- Tarjeta -->
          <div class="card-body"> <!-- Cuerpo tarjeta -->
            <h6 class="text-muted mb-1">Respuestas registradas</h6> <!-- Etiqueta -->
            <div class="display-5 fw-bold"><?php echo $totalRespuestas; ?></div> <!-- Valor respuestas -->
          </div> <!-- Fin cuerpo -->
        </div> <!-- Fin tarjeta -->
      </div> <!-- Fin columna -->
     
    </div> <!-- Fin fila tarjetas -->

    <div class="row"> <!-- Fila contenido -->
      <div class="col-md-6"> <!-- Columna gráfico -->
        <div class="card"> <!-- Tarjeta -->
          <div class="card-body"> <!-- Cuerpo -->
            <h5 class="card-title">Distribución de respuestas (%)</h5> <!-- Título secc. -->
            <canvas id="grafico"></canvas> <!-- Canvas del gráfico -->
          </div> <!-- Fin cuerpo -->
        </div> <!-- Fin tarjeta -->
      </div> <!-- Fin columna -->
      <div class="col-md-6"> <!-- Columna detalle -->
        <div class="card"> <!-- Tarjeta -->
          <div class="card-body"> <!-- Cuerpo -->
            <h5 class="card-title">Detalle</h5> <!-- Título detalle -->
            <ul class="list-group"> <!-- Lista resumen -->
              <li class="list-group-item d-flex justify-content-between align-items-center"> <!-- Item agro -->
                Bioagroindustrias <span class="badge bg-success rounded-pill"><?php echo $agro; ?> (<?php echo $pAgro; ?>%)</span> <!-- Valor agro -->
              </li> <!-- Fin item -->
              <li class="list-group-item d-flex justify-content-between align-items-center"> <!-- Item info -->
                Informática <span class="badge bg-primary rounded-pill"><?php echo $info; ?> (<?php echo $pInfo; ?>%)</span> <!-- Valor info -->
              </li> <!-- Fin item -->
              <li class="list-group-item d-flex justify-content-between align-items-center"> <!-- Item eco -->
                Económia y Administración <span class="badge bg-warning text-dark rounded-pill"><?php echo $eco; ?> (<?php echo $pEco; ?>%)</span> <!-- Valor eco -->
              </li> <!-- Fin item -->
            </ul> <!-- Fin lista -->
          </div> <!-- Fin cuerpo -->
        </div> <!-- Fin tarjeta -->
        <?php 
        if ( $pInfo > $pAgro and $pInfo > $pEco) { $Masvotado= "preferencias por la especialidad de Informática"; } 
        else { if ($pAgro > $pInfo and $pAgro > $pEco ) { $Masvotado= "preferencias por la especialidad de Bioagroindustrias"; } 
        else {if ($pEco > $pAgro and $pEco > $pInfo ) { $Masvotado= "preferencias por la especialidad de Economía y Administración"; } 
        else { $Masvotado="preferencias por algunas especialidades por igual. Sugerimos visiten las páginas de la especialidad." ;}
         } } ?></p>
        <div class="card mt-5"> <!-- Tarjeta -->
          <div class="card-body"> <!-- Cuerpo --> 
            <h5 class="card-title">Explicación</h5> <!-- Título detalle -->
            <?php echo "<p> Las personas han demostrado " .$Masvotado. "</p>"  ; ?>
          </div> <!-- Fin cuerpo -->
        </div> <!-- Fin tarjeta -->

        <?php if (!empty($usuariosNube)): ?>
        <div class="card mt-3"> <!-- Tarjeta nube de palabras -->
          <div class="card-body"> <!-- Cuerpo --> 
            <h5 class="card-title">Nube de participantes</h5> <!-- Título nube -->
            <!-- DEBUG: Mostrar arreglo usuariosNube -->
             <!--
            <div class="alert alert-info small mb-3">
              <strong>DEBUG usuariosNube:</strong><br>
              <pre><?php echo htmlspecialchars(print_r($usuariosNube, true)); ?></pre>
              <strong>Total usuarios:</strong> <?php echo count($usuariosNube); ?>
            </div>
        -->
            <div class="d-flex justify-content-center align-items-center" style="min-height: 400px; position: relative;">
              <canvas id="nubeNombres" style="border: 1px solid #ddd; background-color: #f9f9f9; max-width: 100%;"></canvas>
              <div id="nubeLoading" class="position-absolute" style="top: 50%; left: 50%; transform: translate(-50%, -50%);">
                <div class="spinner-border text-primary" role="status">
                  <span class="visually-hidden">Cargando...</span>
                </div>
              </div>
            </div>
          </div> <!-- Fin cuerpo -->
        </div> <!-- Fin tarjeta -->
        <?php else: ?>
        <div class="card mt-3">
          <div class="card-body">
            <div class="alert alert-warning">
              <strong>DEBUG:</strong> No hay usuarios en usuariosNube. Array vacío.
            </div>
          </div>
        </div>
        <?php endif; ?>

      </div> <!-- Fin columna -->
    </div> <!-- Fin fila -->

  </div> <!-- Fin contenedor -->

  <?php linksWordCloud2(); ?> <!-- Librería WordCloud2 - Cargada antes de usarla -->
  
  <script>
    // Verificar que WordCloud2 se cargue
    window.addEventListener('load', function() {
      console.log('Scripts cargados. WordCloud disponible:', typeof WordCloud !== 'undefined');
      if (typeof WordCloud === 'undefined') {
        console.error('⚠️ WordCloud2 NO se cargó correctamente. Verifica la ruta del script.');
      }
    });
  </script>
  
  <script> // Script del gráfico
    const ctx = document.getElementById('grafico'); // Obtiene canvas
    new Chart(ctx, { // Crea gráfico
      type: 'doughnut', // Tipo donut
      data: { // Datos
        labels: ['Bioagroindustrias', 'Informática', 'Economía'], // Etiquetas
        datasets: [{ // Dataset principal
          data: [<?php echo $pAgro; ?>, <?php echo $pInfo; ?>, <?php echo $pEco; ?>], // Valores porcentuales
          backgroundColor: [ // Colores de fondo
            'rgba(75, 192, 192, 0.7)', // Verde agua
            'rgba(54, 162, 235, 0.7)', // Azul
            'rgba(255, 206, 86, 0.7)' // Amarillo
          ],
          borderColor: [ // Colores borde
            'rgba(75, 192, 192, 1)', // Borde verde
            'rgba(54, 162, 235, 1)', // Borde azul
            'rgba(255, 206, 86, 1)' // Borde amarillo
          ],
          borderWidth: 1 // Grosor borde
        }]
      },
      options: { // Opciones
        responsive: true, // Responsivo
        plugins: { legend: { position: 'bottom' } } // Leyenda abajo
      }
    }); // Fin Chart

    // Script de nube de palabras
    <?php if (!empty($usuariosNube)): ?>
    // Preparar datos de usuarios
    const usuariosData = [
      <?php 
      $maxFrecuencia = 0;
      foreach ($usuariosNube as $usuario) {
        if ($usuario['frecuencia'] > $maxFrecuencia) {
          $maxFrecuencia = $usuario['frecuencia'];
        }
      }
      $first = true;
      foreach ($usuariosNube as $usuario) {
        if (!$first) echo ',';
        $first = false;
        // Normalizar frecuencia para el tamaño (mínimo 10, máximo 60)
        $tamaño = 10 + (($usuario['frecuencia'] / $maxFrecuencia) * 50);
        echo '["' . $usuario['nombre'] . '", ' . $tamaño . ']';
      }
      ?>
    ];
    
    console.log('Datos usuarios preparados:', usuariosData);
    
    // Función para crear la nube de palabras
    function crearNubePalabras() {
      console.log('Intentando crear nube de palabras...');
      console.log('WordCloud disponible:', typeof WordCloud !== 'undefined');
      
      const canvasNube = document.getElementById('nubeNombres');
      console.log('Canvas encontrado:', canvasNube !== null);
      
      if (!canvasNube) {
        console.error('ERROR: No se encontró el canvas con id "nubeNombres"');
        return false;
      }
      
      if (typeof WordCloud === 'undefined') {
        console.error('ERROR: WordCloud no está definido. Verifica que el script se haya cargado correctamente.');
        return false;
      }
      
      try {
        console.log('Creando nube de palabras con', usuariosData.length, 'usuarios...');
        
        // Establecer dimensiones del canvas de forma segura
        const container = canvasNube.parentElement;
        const maxWidth = Math.min(container.offsetWidth - 40, 600);
        const maxHeight = 400;
        
        canvasNube.width = maxWidth;
        canvasNube.height = maxHeight;
        
        console.log('Canvas dimensiones:', canvasNube.width, 'x', canvasNube.height);
        
        WordCloud(canvasNube, {
          list: usuariosData,
          gridSize: 8, // Tamaño de grilla más pequeño y fijo
          weightFactor: function(size) {
            // Simplificar el cálculo del factor de peso
            return size * (maxWidth / 500);
          },
          fontFamily: 'Arial, sans-serif',
          color: function(word, weight, fontSize, distance, theta) {
            // Colores variados
            const colors = [
              '#146941', // Verde institucional
              '#0d6efd', // Azul Bootstrap
              '#ffc107', // Amarillo
              '#dc3545', // Rojo
              '#6f42c1', // Púrpura
              '#fd7e14', // Naranja
              '#20c997', // Verde agua
              '#0dcaf0'  // Cian
            ];
            return colors[Math.floor(Math.random() * colors.length)];
          },
          rotateRatio: 0.3,
          rotationSteps: 2,
          backgroundColor: 'transparent',
          minSize: 12, // Tamaño mínimo más grande
          drawOutOfBound: false // No dibujar fuera de los límites
        });
        console.log('✓ Nube de palabras creada exitosamente');
        // Ocultar spinner de carga
        const loading = document.getElementById('nubeLoading');
        if (loading) loading.style.display = 'none';
        return true;
      } catch (error) {
        console.error('ERROR al crear nube de palabras:', error);
        return false;
      }
    }
    
    // Intentar crear la nube cuando el DOM esté listo
    if (document.readyState === 'loading') {
      document.addEventListener('DOMContentLoaded', function() {
        console.log('DOM cargado, intentando crear nube...');
        // Esperar un poco más para asegurar que WordCloud2 se haya cargado
        setTimeout(crearNubePalabras, 100);
      });
    } else {
      // El DOM ya está listo
      console.log('DOM ya está listo, intentando crear nube...');
      // Esperar un poco para asegurar que WordCloud2 se haya cargado
      setTimeout(crearNubePalabras, 100);
    }
    
    // También intentar cuando la ventana se carga completamente
    window.addEventListener('load', function() {
      console.log('Ventana cargada completamente, verificando nube...');
      setTimeout(function() {
        const canvas = document.getElementById('nubeNombres');
        if (canvas && canvas.width > 0 && canvas.height > 0) {
          // Verificar si el canvas tiene contenido
          const ctx = canvas.getContext('2d');
          const imageData = ctx.getImageData(0, 0, canvas.width, canvas.height);
          const hasContent = imageData.data.some(pixel => pixel !== 0);
          if (!hasContent && typeof WordCloud !== 'undefined') {
            console.log('Canvas vacío, reintentando crear nube...');
            crearNubePalabras();
          }
        } else if (typeof WordCloud !== 'undefined') {
          crearNubePalabras();
        }
      }, 500);
    });
    <?php endif; ?>
  </script> <!-- Fin script -->
  <?php piePaginaBootstrap(); ?>
</body> <!-- Fin body -->
</html> <!-- Fin HTML -->
