<?php
include 'librerias/funcionesHTML.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Selección Única</title>
    <?php linksBootstrapHeader(); ?>
    <style>
        body {
            font-family: Georgia, "Times New Roman", Times, serif;
        }
    </style>
</head>
<body>
    
     <div class="container-fluid">

  <?php
  menuNavbar("orientacion");
  // menu();
  ?>
        <h1>Orientatec</h1>
        <h2>Elegí tu orientación con un click</h2>
        
        <div class="row mb-4">
            <div class="col-md-6">
                <p class="h5">OrientaTec es una herramienta diseñada para ayudarte a descubrir tu orientación vocacional. A través de un cuestionario simple y directo, podrás identificar cuál de nuestras especialidades se alinea mejor con tus intereses, habilidades y preferencias. Nuestro objetivo es guiarte en la elección de tu futuro académico y profesional.</p>
            </div>
            <div class="col-md-6 d-flex justify-content-end align-items-start">
                <img src="img/eslogan.jpeg" class="rounded" style="width:300px;">
                <img src="img/logo d.png" class="rounded" style="width: 200px;">
            </div>
        </div>
        
        <form action="respuestas.php" name="formulario.php" method="POST">
            <!-- Pregunta con opciones únicas -->
            
            <div class="mb-3">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="Usuario" required>
            </div>
        
            <div class="card mb-3 mr-2">
                <div class="card-header">
                1.¿ Que te resulta mas interesante ?
                </div>
                <div class="card-body">
                    
                    
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta_1" value="info" required>
                        <label class="form-check-label" for="respuesta_1">Usar o reparar computadoras</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta_1" value="eco">
                        <label class="form-check-label" for="respuesta_1">Organizar cosas y ayudar a planificar</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta1" value="agro">
                        <label class="form-check-label" for="respuesta1">Cuidar plantas y ver como se producen alimentos </label>
                    </div>
                </div>
            </div>
            
            <div class="card mb-3">
                <div class="card-header">
                    2. En tu tiempo libre preferis:
                </div>
                <div class="card-body">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pregunta2" id="respuesta2" value="info" required>
                        <label class="form-check-label" for="html">Jugar y explorar cosas en la compu</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pregunta2" id="respuesta2" value="eco">
                        <label class="form-check-label" for="css">Organizar tus cosas y ayudar a tus amigos a hacerlo</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pregunta2" id="respuesta2" value="agro">
                        <label class="form-check-label" for="javascript">Estar al aire libre y hacer practicas</label>
                    </div>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-header">
                    3. ¿ En que sos bueno/a: ?
                </div>
                <div class="card-body">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pregunta3" id="respuesta3" value="info" required>
                        <label class="form-check-label" for="html">Entender como funcionan los programas y aparatos</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pregunta3" id="respuesta3" value="eco">
                        <label class="form-check-label" for="css">Calcular, administrar y llevar cuentas</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pregunta3" id="respuesta3" value="agro">
                        <label class="form-check-label" for="javascript">Trabajar con las manos y seguir pasos claros </label>
                    </div>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-header">
                    4. Cuando tenes que resolver un problema ¿Que haces?
                </div>
                <div class="card-body">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pregunta4" id="respuesta4" value="info" required>
                        <label class="form-check-label" for="html">Busco una solución lógica y tecnológica</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pregunta4" id="respuesta4" value="eco">
                        <label class="form-check-label" for="css">Pienso cómo organizar y planificar mejor</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pregunta4" id="respuesta4" value="agro">
                        <label class="form-check-label" for="javascript"> Pruebo distintas formas hasta que salga</label>
                    </div>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-header">
                    5. Cómo te imaginas trabajando
                </div>
                <div class="card-body">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pregunta5" id="respuesta5" value="info" required>
                        <label class="form-check-label" for="html">En una empresa de tecnologia y programando</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pregunta5" id="pregunta5" value="eco">
                        <label class="form-check-label" for="css">En una oficina y manejando un negocio</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pregunta5" id="respuesta5" value="agro">
                        <label class="form-check-label" for="javascript">En una fabrica de alimentos y en el campo</label>
                    </div>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-header">
                    6. Si tuvieras que elegir un proyecto ¿Que eligirias?
                </div>
                <div class="card-body">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pregunta6" id="respuesta6" value="info" required>
                        <label class="form-check-label" for="html">Diseñar una app y armar una PC</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pregunta6" id="respuesta6" value="eco">
                        <label class="form-check-label" for="css">Crear un emprendimiento y negocio</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pregunta6" id="respuesta6" value="agro">
                        <label class="form-check-label" for="javascript">Producir alimentos saludables y cuidar el ambiente</label>
                    </div>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-header">
                    7. ¿ Como preferis aprender ?
                </div>
                <div class="card-body">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pregunta7" id="respuesta7" value="info" required>
                        <label class="form-check-label" for="html"> Usando y Probando</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pregunta7" id="respuesta7" value="eco">
                        <label class="form-check-label" for="css"> Escuchando y anotando </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pregunta7" id="respuesta7" value="agro">
                        <label class="form-check-label" for="javascript">Haciendo cosas con tus manos </label>
                    </div>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-header">
                    8. ¿ Como te describirias ?
                </div>
                <div class="card-body">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pregunta8" id="respuesta8" value="info" required>
                        <label class="form-check-label" for="html">Curioso/a y amante de la tecnologia</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pregunta8" id="respuesta8" value="eco">
                        <label class="form-check-label" for="css">Ordenado/a y responsable</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pregunta8" id="repsuesta8" value="agro">
                        <label class="form-check-label" for="javascript">Practico/a y trabajador/a</label>
                    </div>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-header">
                    9. ¿Que tipo de materias te gustan mas?
                </div>
                <div class="card-body">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pregunta9" id="respuesta9" value="info" required>
                        <label class="form-check-label" for="html">Informatica, fisica, matematica</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pregunta9" id="respuesta9" value="eco">
                        <label class="form-check-label" for="css">Contabilidad, Economia , Lengua</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pregunta9" id="respuesta9" value="agro">
                        <label class="form-check-label" for="javascript">Biologia, Quimica, Ciencias Naturales</label>
                    </div>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-header">
                    10. ¿Que tipo de entorno te gusta mas?
                </div>
                <div class="card-body">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pregunta10" id="respuesta10" value="info"required>
                        <label class="form-check-label" for="html">Oficina y laboratorio con computadoras</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pregunta10" id="respuesta10" value="eco">
                        <label class="form-check-label" for="css">Oficina y escuela con muchas personas</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pregunta10" id="respuesta10" value="agro">
                        <label class="form-check-label" for="javascript">Espacios abiertos y talleres</label>
                    </div>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-header">
                    11. ¿Que te gustaria lograr con tu trabajo?
                </div>
                <div class="card-body">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pregunta11" id="respuesta11" value="info" required>
                        <label class="form-check-label" for="html">Crear soluciones y innovaciones tecnologicas</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pregunta11" id="respuesta11" value="eco">
                        <label class="form-check-label" for="css">Organizar y mejorar una empresa</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pregunta11" id="respuesta11" value="agro">
                        <label class="form-check-label" for="javascript">Cuidar el ambiente y producir cosas utiles</label>
                    </div>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-header">
                    12. ¿Que te haria sentir mas feliz ?
                </div>
                <div class="card-body">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pregunta12" id="respuesta12" value="info" required>
                        <label class="form-check-label" for="html">Armar y reparar algo con tecnologia</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pregunta12" id="respuesta12" value="eco">
                        <label class="form-check-label" for="css">Planificar un negocio y  ver que funciona</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pregunta12" id="respuesta12" value="agro">
                        <label class="form-check-label" for="javascript">Ver crecer una planta y producir alimentos</label>
                    </div>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-header">
                    13. ¿Con que frasete sentis mas identicado/a ?
                </div>
                <div class="card-body">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pregunta13" id="respuesta13" value="info" required>
                        <label class="form-check-label" for="html">"Me encanta la tecnologia y descubrir como funcionan las cosas"</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pregunta13" id="respuesta13" value="eco">
                        <label class="form-check-label" for="css">"Me gusta organizar y pensar como mejorar un proyecto </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pregunta13" id="respuesta13" value="agro">
                        <label class="form-check-label" for="javascript">"Me gusta el trabajo practico y ciudar la naturaleza"</label>
                    </div>
                </div>
            </div>
            
            
            <br>
            
                <!-- Botón de Enviar -->
            <button type="submit" class="btn btn-success">Enviar</button>
            <button type="reset" class="btn btn-secondary">Reestablecer</button>
        
        </form>
        <script>
    document.getElementById("cuestionario").addEventListener("submit", function(event) {
      const totalPreguntas = 13; // cambialo a 13 cuando tengas todas las preguntas
      let respondidas = 0;

      // Recorre todas las preguntas
      for (let i = 1; i <= totalPreguntas; i++) {
        const opciones = document.getElementsByName("p" + i);
        let marcada = false;
        for (let opcion of opciones) {
          if (opcion.checked) {
            marcada = true;
            break;
          }
        }
        if (marcada) {
          respondidas++;
        }
      }

      // Si no están todas respondidas, se detiene el envío
      if (respondidas < totalPreguntas) {
        event.preventDefault();
        alert("⚠️ Debes responder todas las preguntas antes de enviar el formulario.");
      }
    });
    </script>

    </div>

<?php piePaginaBootstrap(); ?>
</body>
</html>
