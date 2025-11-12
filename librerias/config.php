<?php
/**
 * Archivo de Configuración
 * 
 * Este archivo contiene todas las variables de configuración del sistema
 * incluyendo conexión a base de datos y preferencias de recursos (local/online)
 */

// ============================================
// CONFIGURACIÓN DE RECURSOS (LOCAL/ONLINE)
// ============================================
// Cambiar a 'local' para usar archivos locales
// Cambiar a 'online' para usar CDN
define('RECURSOS_MODO', 'local'); // 'local' o 'online'

// ============================================
// CONFIGURACIÓN DE BASE DE DATOS
// ============================================

define('DB_HOST', 'localhost'); // localhost (si es local), NUMERO_IP O NOMBRE_SERVIDOR_PUBLICO (si es remoto)
define('DB_USER', 'usuario'); // USUARIO DE LA BD
define('DB_PASSWORD', 'clave'); // CLAVE DEL USUARIO
define('DB_NAME', 'basededatos'); // NOMBRE DE LA BD



// ============================================
// RUTAS DE RECURSOS LOCALES
// ============================================
define('BOOTSTRAP_CSS_LOCAL', 'css/bootstrap-5.3.8-dist/css/bootstrap.min.css');
define('BOOTSTRAP_JS_LOCAL', 'css/bootstrap-5.3.8-dist/js/bootstrap.bundle.min.js');
define('FONTAWESOME_CSS_LOCAL', 'css/font-awesome-6.5.0/css/all.min.css');
define('WORDCLOUD2_JS_LOCAL', 'js/wordcloud2.js');

// ============================================
// URLs DE RECURSOS ONLINE (CDN)
// ============================================
define('BOOTSTRAP_CSS_ONLINE', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css');
define('BOOTSTRAP_JS_ONLINE', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js');
define('FONTAWESOME_CSS_ONLINE', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css');
define('WORDCLOUD2_JS_ONLINE', 'https://cdn.jsdelivr.net/gh/timdream/wordcloud2.js@master/src/wordcloud2.js');

?>

