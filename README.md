# Orientatec

## 📚 Descripción del Proyecto

**Orientatec** es una aplicación web desarrollada como proyecto integrador de los espacios curriculares de la **especialidad en Informática de 6to año C** del I.P.E.A.T.y M. N° 186 "CAPITAN LUIS DARIO JOSE CASTAGNARI".

El proyecto tiene como objetivo ayudar a los estudiantes a descubrir su orientación vocacional a través de un cuestionario interactivo que evalúa sus intereses, habilidades y preferencias, sugiriendo la especialidad que mejor se alinea con su perfil.

## 🎓 Espacios Curriculares Involucrados

Este proyecto integra conocimientos y competencias de los siguientes espacios curriculares:

- **Laboratorio de Aplicaciones II**
- **Laboratorio de Programación**
- **Base de Datos**

## 🛠️ Stack Tecnológico

El proyecto está desarrollado utilizando las siguientes tecnologías:

### Frontend

- **HTML5** - Estructura y semántica
- **CSS3** - Estilos y diseño responsive
- **JavaScript** - Interactividad y lógica del cliente
- **Bootstrap 5.3.8** - Framework CSS para diseño responsive
- **FontAwesome 6.5.0** - Iconografía
- **Chart.js** - Visualización de datos (gráficos)
- **WordCloud2.js** - Generación de nubes de palabras

### Backend

- **PHP** - Lenguaje de programación del servidor
- **MySQL** - Base de datos relacional

### Herramientas de Desarrollo

- **XAMPP Server** - Servidor web Apache con PHP y MySQL (desarrollo local)
- **Visual Studio Code** - Editor de código
- **phpMyAdmin** - Cliente gráfico para administración de MySQL

### Hosting y Despliegue

- **InfinityFree** - Hosting gratuito para producción
- **URL de la aplicación**: [https://shorturl.do/orientatec](https://shorturl.do/orientatec)

## 📁 Estructura del Proyecto

```
101025/
├── bd/
│   └── script.sql              # Script de creación de la base de datos
├── css/
│   ├── bootstrap-5.3.8-dist/   # Bootstrap local
│   ├── font-awesome-6.5.0/    # FontAwesome local
│   └── miEstilo.css           # Estilos personalizados
├── img/                        # Imágenes del proyecto
├── js/
│   └── wordcloud2.js          # Librería WordCloud2 local
├── librerias/
│   ├── config.php             # Archivo de configuración centralizado
│   ├── basededatos.php        # Funciones de conexión a BD
│   └── funcionesHTML.php      # Funciones para generar componentes HTML
├── index.php                   # Página principal
├── nosotros.php                # Página "Nosotros"
├── formulario.php              # Formulario de orientación vocacional
├── respuestas.php              # Resultados individuales del formulario
├── respuestasgnrl.php          # Historial y estadísticas generales
├── bachiller.php               # Página de Bachiller en Economía
├── bioagro.php                 # Página de Bachiller en Bioagroindustria
├── informatica.php             # Página de Técnico en Informática
└── README.md                   # Este archivo
```

## ⚙️ Configuración

### Base de Datos

1. **Crear la base de datos**: Ejecuta el script SQL ubicado en `bd/script.sql` desde phpMyAdmin o desde la línea de comandos de MySQL.
2. **Configurar conexión**: Edita el archivo `librerias/config.php` y actualiza las siguientes constantes según tu configuración:

```php
define('DB_HOST', 'localhost');        // Host de la base de datos
define('DB_USER', 'tu_usuario');       // Usuario de MySQL
define('DB_PASSWORD', 'tu_password');  // Contraseña del usuario
define('DB_NAME', 'orientatecv2');     // Nombre de la base de datos
```

### Recursos (Local/Online)

El proyecto permite cargar recursos (Bootstrap, FontAwesome, WordCloud2) desde archivos locales o desde CDN. Esto se configura en `librerias/config.php`:

```php
define('RECURSOS_MODO', 'local');  // 'local' o 'online'
```

- **'local'**: Usa los archivos descargados en las carpetas `css/` y `js/`
- **'online'**: Usa CDN (requiere conexión a internet)

### Servidor Web

1. Asegúrate de que **XAMPP** esté instalado y funcionando
2. Coloca el proyecto en la carpeta `htdocs` de XAMPP (o configura un virtual host)
3. Inicia los servicios **Apache** y **MySQL** desde el panel de control de XAMPP
4. Accede a la aplicación desde: `http://localhost/6c-2025/101025/`

## 🚀 Funcionalidades

### Para Estudiantes

- **Formulario de Orientación Vocacional**: Cuestionario interactivo con 13 preguntas que evalúan preferencias
- **Resultados Personalizados**: Visualización de resultados con gráficos y recomendaciones
- **Información de Especialidades**: Páginas informativas sobre cada orientación disponible

### Para Administradores

- **Historial de Respuestas**: Visualización de todas las respuestas recibidas
- **Estadísticas Generales**: Gráficos y métricas sobre las preferencias de los estudiantes
- **Nube de Participantes**: Visualización de todos los participantes mediante nube de palabras

## 📊 Base de Datos

### Estructura

La base de datos contiene una tabla principal:

**`respuestas`**

- `idrespuestas` (BIGINT, AUTO_INCREMENT, PRIMARY KEY)
- `opcion_elegida` (VARCHAR) - Especialidad elegida: 'agro', 'info', 'eco'
- `usuario` (VARCHAR) - Nombre del estudiante que respondió

### Script de Creación

El script de creación de la base de datos se encuentra en `bd/script.sql` e incluye:

- Creación de la base de datos
- Creación de la tabla `respuestas`
- Datos de ejemplo para pruebas

## 🎨 Características Técnicas

- **Diseño Responsive**: Adaptable a diferentes tamaños de pantalla
- **Navegación Intuitiva**: Menú de navegación con indicador de página activa
- **Visualización de Datos**: Gráficos interactivos con Chart.js
- **Nube de Palabras**: Visualización de participantes con WordCloud2
- **Configuración Centralizada**: Archivo único para gestionar configuración
- **Carga Flexible de Recursos**: Soporte para recursos locales y CDN

## 👥 Autores

Proyecto desarrollado por estudiantes de **6to año C - Especialidad en Informática** del I.P.E.A.T.y M. N° 186 "CAPITAN LUIS DARIO JOSE CASTAGNARI".

## 📝 Notas Adicionales

- El proyecto utiliza **mysqli** para la conexión a la base de datos
- Se implementan medidas de seguridad básicas como `mysqli_real_escape_string()` y `htmlspecialchars()` para prevenir inyección SQL y XSS
- Los recursos pueden cargarse localmente o desde CDN según la configuración
- El proyecto está optimizado para funcionar en entornos de desarrollo local con XAMPP
- **Hosting en producción**: El proyecto está desplegado en [InfinityFree](https://www.infinityfree.com/) de forma gratuita
- **URL pública**: [https://shorturl.do/orientatec](https://shorturl.do/orientatec)

## 🚀 Futuras Extensiones

El proyecto actualmente se encuentra en una versión inicial con funcionalidades básicas. Se planean las siguientes mejoras y extensiones:

### Propuesta de estudiantes:

* Página de producciones agropecuarias con venta de ellas
* Saber cuantos chicos hay en cada curso
* Publicaciones (entrevistas mediante videos, audios, textos acompañados de fotos, ... simil post de un blog) vinculada a las especialidades
* Requisitos a presentar para el ingreso y el reglamento institucional (acuerdo de convivencia escolar)
* Página sobre eventos culturales
* Ampliar las páginas de las especialidades con Plan de Estudio
* Ampliar la página nosotros con el staff docente
* Gestión de usuarios y funcionalidad cuaderno de comunicación
* Gestión de dominio edu.ar (escuelacastagnari.edu.ar o ipeatym186.edu.ar o casta186.edu.ar)
* Gestion de Hosting con convenio de la Universidad

### Página de Novedades

### Web Responsive

### Ampliación de Base de Datos y Funcionalidades CRUD

Actualmente el sistema solo implementa operaciones básicas de **INSERT** y **SELECT**. Se planea completar el **CRUD completo** (Create, Read, Update, Delete) para:

- **Actualización de datos**: Permitir modificar respuestas y usuarios existentes
- **Eliminación de datos**: Implementar funcionalidad para eliminar registros de forma segura
- **Validación avanzada**: Mejorar la validación de datos en todas las operaciones
- **Auditoría**: Registrar cambios y mantener historial de modificaciones

### Sistema de Administración

- **Panel de administradores**: Crear un área restringida para administradores con autenticación
- **Gestión de preguntas**: Permitir a los administradores:
  - Agregar nuevas preguntas al formulario
  - Modificar preguntas existentes
  - Eliminar o desactivar preguntas
  - Reordenar el orden de las preguntas
  - Gestionar las opciones de respuesta para cada pregunta
- **Gestión de usuarios**: Administrar usuarios del sistema, roles y permisos
- **Estadísticas avanzadas**: Dashboard con métricas más detalladas y reportes personalizados

### Expansión a Otras Funcionalidades del Colegio

El objetivo a largo plazo es ampliar la aplicación para cubrir distintas necesidades del colegio:

- **Gestión académica**: Sistema de calificaciones, asistencia, materias
- **Comunicación**: Portal de noticias y anuncios del colegio
- **Recursos educativos**: Biblioteca digital, materiales de estudio
- **Eventos**: Gestión de eventos escolares, ferias, actividades
- **Biblioteca**: Sistema de préstamo de libros
- **Tutorías**: Sistema de seguimiento y tutorías estudiantiles

Estas extensiones convertirán a Orientatec en una plataforma integral para la gestión y administración de diversas tareas del colegio.

## 📞 Contacto

**I.P.E.A.T.y M. N° 186 "CAPITAN LUIS DARIO JOSE CASTAGNARI"**

- 📧 Email: ipeayt186capitancastagnari@gmail.com
- 📱 Teléfono: 3584978840
- 📷 Instagram: [@ipeatym186](https://instagram.com/ipeatym186)

---

*Proyecto desarrollado con fines educativos - 2025*
