<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Selección Única</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container mt-5">
        <h2>Elegí tu orientación con un click</h2>
        <br>
        <form>
            <!-- Pregunta con opciones únicas -->
            <div class="mb-3">
                <label class="form-label">1.¿ Que te resulta mas interesante ?</label>
                
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pregunta1" id="respuesta_1" value="info">
                    <label class="form-check-label" for="respuesta_1">Usar o reparar computadoras</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pregunta1" id="respuesta_1" value="eco">
                    <label class="form-check-label" for="respuesta_1">Organizar cosas o ayudar a planificar</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pregunta1" id="respuesta_1" value="agro">
                    <label class="form-check-label" for="respuesta_1">Ciudar plantas o ver como se producen alimentos </label>
                </div>
            </div>
            

            <br>

            <div class="mb-3">
                <label class="form-label">2. En tu tiempo libre preferis:</label>
                
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pregunta2" id="respuesta2" value="info">
                    <label class="form-check-label" for="html">Jugar o explorar cosas en la compu</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pregunta2" id="respuesta2" value="eco">
                    <label class="form-check-label" for="css">Organizar tus cosas o ayudar a tus amigos a hacerlo</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pregunta2" id="respuesta2" value="agro">
                    <label class="form-check-label" for="javascript">Estar al aire libre o hacer practicas</label>
                </div>
            </div>


            <br>

              <div class="mb-3">
                <label class="form-label">3. ¿ En que sos bueno/: ? </label>
                
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pregunta3" id="respuesta3" value="info">
                    <label class="form-check-label" for="html">Entender como funcionan los programas o aparatos</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pregunta3" id="respuesta3" value="eco">
                    <label class="form-check-label" for="css">Calcular, administrar o llevar cuentas</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pregunta3" id="respuesta3" value="agro">
                    <label class="form-check-label" for="javascript">Trabajar con las manos y seguir pasos claros </label>
                </div>
            </div>


            <br>

            <div class="mb-3">
                <label class="form-label"> 4. Cuando tenes que resolver un problema ¿Que haces?</label>
                
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pregunta4" id="respuesta4" value="info">
                    <label class="form-check-label" for="html">Busco una solución lógica o tecnológica</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="preguta4" id="respuesta4" value="eco">
                    <label class="form-check-label" for="css">Pienso cómo organizar o planificar mejor</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pregunta4" id="javascript" value="agro">
                    <label class="form-check-label" for="javascript"> Pruebo distintas formas hasta que salga</label>
                </div>
            </div>

        <br>
            <div class="mb-3">
                <label class="form-label">5. Cómo te imaginas trabajando</label>
                
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pregunta5" id="respuesta5" value="info">
                    <label class="form-check-label" for="html">En una empresa de tecnologia o programando</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pregunta5" id="pregunta5" value="eco">
                    <label class="form-check-label" for="css">En una oficina o manejando un negocio</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pregunta5" id="respuesta5" value="agro">
                    <label class="form-check-label" for="javascript">En una fabrica de alimentos o en el campo</label>
                </div>
            </div>

        <br>
            <div class="mb-3">
                <label class="form-label">6. Si tuvieras que elegir un proyecto ¿Que eligirias? </label>
                
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pregunta6" id="respuesta6" value="info">
                    <label class="form-check-label" for="html">Diseñar una app o  armar una PC</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pregunta6" id="respuesta6" value="eco">
                    <label class="form-check-label" for="css">Crear un emprendimiento o negocio</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pregunta6" id="respuesta6" value="agro">
                    <label class="form-check-label" for="javascript">Producir alimentos saludables o cuidar el ambiente</label>
                </div>
            </div>
        <br>
            <div class="mb-3">
                <label class="form-label"> 7. ¿ Como preferis aprender ? </label>
                
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pregunta7" id="respuesta7" value="info">
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
            <br> 
            <div class="mb-3">
                <label class="form-label"> 8. ¿ Como te describirias ? </label>
                
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pregunta8" id="respuesta8" value="info">
                    <label class="form-check-label" for="html">Curioso/a y amante de la tecnologia</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="preguta8" id="respuesta8" value="eco">
                    <label class="form-check-label" for="css">Ordenado/a y responsable</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pregunta8" id="repsuesta8" value="agro">
                    <label class="form-check-label" for="javascript">Practico/a y trabajador/a</label>
                </div>
            </div>
            <br>
              <div class="mb-3">
                <label class="form-label"> 9. ¿Que tipo de materias te gustan mas? </label>
                
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pregunta9" id="respuesta9" value="info">
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
            <br>
             <div class="mb-3">
                <label class="form-label"> 10. ¿Que tipo de entorno te gusta mas?</label>
                
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pregunta10" id="respuesta10" value="info">
                    <label class="form-check-label" for="html">Oficina o laboratorio con computadoras</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pregunta10" id="respuesta10" value="eco">
                    <label class="form-check-label" for="css">Oficina o escuela con muchas personas</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pegunta10" id="respuesta10" value="agro">
                    <label class="form-check-label" for="javascript">Espacios abiertos o talleres</label>
                </div>
            </div>
            <br>
             <div class="mb-3">
                <label class="form-label"> 11. ¿Que te gustaria lograr con tu trabajo?</label>
                
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pregunta11" id="respuesta11" value="info">
                    <label class="form-check-label" for="html">Crear soluciones o innovaciones tecnologicas</label>
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
            <br>
            <div class="mb-3">
                <label class="form-label"> 12. ¿Que te haria sentir mas feliz ?</label>
                
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pregunta12" id="respuesta12" value="info">
                    <label class="form-check-label" for="html">Armar o reparar algo con tecnologia</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pregunta12" id="respuesta12" value="eco">
                    <label class="form-check-label" for="css">Planificar un negocio y  ver que funciona</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pregunta12" id="respuesta12" value="agro">
                    <label class="form-check-label" for="javascript">Ver crecer una planta o producir alimentos</label>
                </div>
            </div>
            <br>
            <div class="mb-3">
                <label class="form-label"> 13. ¿Con que frasete sentis mas identicado/a ?</label>
                
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="prenguta13" id="respuesta13" value="info">
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

            
            
            <br>
                <!-- Botón de Enviar -->
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
