<?php
/* Archivo de configuración */

/**
 * URL que usaremos para cargar nuestras imágenes, js y css
 */ 
define('BASE_URL', 'http://localhost/Frameworks/flight_editado/'); // Archivos para incluir la vista en base del usuario
define('DEFAULT_CONTROLLER', 'index'); // Controlador por defecto
define('DEFAULT_MODULE', 'home'); // Controlador por defecto
define('DEFAULT_LAYOUT', 'default'); // Layout por defecto
define('DEFAULT_THEME', 'default_theme'); // Layout por defecto

/**
 * Configuración i18n
 */
define('DEFAULT_LANGUAJE', 'es');
define('LANGUAJE_EXT', 'ini');
date_default_timezone_set('America/Argentina/Buenos_Aires');

 
/**
 * Nombre de la App
 */ 
define('APP_NAME', 'SoftTortilla Framework');

/**
 * Slogan o descripción de la app
 */ 
define('APP_SLOGAN', 'El Framework de los pibe');
 
/**
 * Copyright de nuestro site
 */ 
define('APP_COMPANY', 'Marcio Fuentes');

/**
 * Tiempo de sesion
 */
define('SESSION_TIME', 30);

/**
 * Hash para encriptación de contraseñas
 */
define('HASH_KEY', '53a61b4c4f911');

/**
 * Cambiar estos datos de conexión por los correspondientes
 * a nuestro host, usuario, contraseña, nombre y codificación
 */
define('DB_HOST', "localhost");
define('DB_USER', "flight_dbusr");
define('DB_PASS', "fl1ght2$16");
define('DB_NAME', "flight");
define('DB_CHAR', "utf8");

?>