# Información de Debug y Logs

## Logs de PHP

Los logs de PHP se pueden encontrar en las siguientes ubicaciones:

1. **Ubicación común en Linux/Apache:**
   - `/var/log/apache2/error.log` (Apache)
   - `/var/log/nginx/error.log` (Nginx)
   - `/var/log/php-fpm/error.log` (PHP-FPM)

2. **Ubicación configurada en php.ini:**
   - Ejecuta: `php -i | grep error_log` para ver la ubicación exacta
   - O revisa: `/etc/php/8.x/apache2/php.ini` (cambia 8.x por tu versión)

3. **Ver logs en tiempo real:**
   ```bash
   # Apache
   sudo tail -f /var/log/apache2/error.log
   
   # Nginx
   sudo tail -f /var/log/nginx/error.log
   
   # PHP-FPM
   sudo tail -f /var/log/php-fpm/error.log
   ```

## Debug en el código

- **En la página:** Se muestra un alert con el contenido de `usuariosNube`
- **En la consola del navegador:** Abre las herramientas de desarrollador (F12) y revisa la pestaña "Console"
- **En los logs de PHP:** Los mensajes de `error_log()` aparecerán en los logs del servidor

## Verificar que WordCloud2 se carga

1. Abre las herramientas de desarrollador (F12)
2. Ve a la pestaña "Network" (Red)
3. Recarga la página
4. Busca el archivo `wordcloud2.js` y verifica que se cargue correctamente (status 200)

## Verificar en la consola del navegador

Abre la consola (F12 > Console) y deberías ver:
- "Iniciando nube de palabras..."
- "WordCloud disponible: true"
- "Canvas encontrado: true"
- "Datos usuarios: [...]"
- "Creando nube de palabras..."
- "Nube de palabras creada exitosamente"
