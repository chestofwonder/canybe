<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'wp_canybe');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'root');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'KYw&N+a5T%WctH+Z&j3DpXI*TP63>]<~Kzm&|czSZ;7.E C4km8GaC4us+8Rb*WM');
define('SECURE_AUTH_KEY', 'PY-..,8SDbV7mNfX+l{i=9B&=PZzE>Ik%hSaw>VYK?,+z.}01t.S?s-i;_5s}Zq.');
define('LOGGED_IN_KEY', '8+yps(T A5yPa#L1TQ#XFe@PcEQD5uXp6GqIP9Pe_-Ov#)##L+tJL8uE]O8*T3h6');
define('NONCE_KEY', 'jw}?:_X*-*D$ _|QDU3I}6m:ePbq*}p&a~10|-y7y^x-T<i1[oNh}-)]M>?Cm1XS');
define('AUTH_SALT', '-?Fz%Jv)1Xs:@|_!Qon-y-MIG`u!;a_+J`A?o58k#6.02;qj-;8;En0jIn6<OVlI');
define('SECURE_AUTH_SALT', 'ah0h6gkW&d55+FRyCH:Vb8%8ke?3Dg&Ss~ojU`s;pob=1fmSNK ]@[Np]g@*cF~W');
define('LOGGED_IN_SALT', 'K=-qrQXEA:-|eptXEZZJkMd8H|q-!0RqFhLP?R-?*Av/+DvUV2i68+zq=qhOMHY6');
define('NONCE_SALT', 'B9VjR|KLBF2y^=tmww[(K#~%-w3WoyC,&iX}9mbxo0BmSL_?_XWM=TM!.%H=VO}+');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

