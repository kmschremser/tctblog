<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/** 
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information by
 * visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

if ( $_SERVER['HTTP_HOST'] == 'local.tricoretraining.com' ) {
    $_SERVER['DOCUMENT_ROOT'] = '/Applications/XAMPP/htdocs/tricoretraining.com';

    // ** MySQL settings - You can get this info from your web host ** //
    /** The name of the database for WordPress */
    define('DB_NAME', 'schrlnek_tctblog');

    /** MySQL database username */
    define('DB_USER', 'root');

    /** MySQL database password */
    define('DB_PASSWORD', '');

    /** MySQL hostname */
    define('DB_HOST', 'localhost');

} elseif (  $_SERVER['HTTP_HOST'] == 'test.tricoretraining.com' ) {

    $_SERVER['DOCUMENT_ROOT'] = '/var/chroot/home/content/92/10829392/html/test.tricoretraining.com';
    // ** MySQL settings - You can get this info from your web host ** //
    /** The name of the database for WordPress */
    define('DB_NAME', 'tcttrainerblogte');

    /** MySQL database username */
    define('DB_USER', 'tcttrainerblogte');

    /** MySQL database password */
    define('DB_PASSWORD', 'Finger99!');

    /** MySQL hostname */
    define('DB_HOST', 'tcttrainerblogte.db.10829392.4c2.hostedresource.net');

} elseif (  $_SERVER['HTTP_HOST'] == 'thetriplans.com' ) {

    $_SERVER['DOCUMENT_ROOT'] = '/home/schrlnek/thetriplans.com';
    // ** MySQL settings - You can get this info from your web host ** //
    /** The name of the database for WordPress */
    define('DB_NAME', 'schrlnek_tctblog');

    /** MySQL database username */
    define('DB_USER', 'schrlnek_tctblog');

    /** MySQL database password */
    define('DB_PASSWORD', '8L,x(z)2eDTbcABWq7gv');

    /** MySQL hostname */
    define('DB_HOST', 'localhost');

} elseif (  $_SERVER['HTTP_HOST'] == 'tricoretraining.com' ) {

    //$_SERVER['DOCUMENT_ROOT'] = '/var/chroot/home/content/92/10829392/html/www.tricoretraining.com';
    $_SERVER['DOCUMENT_ROOT'] = '/home/schrlnek/tricoretraining.com';
    // ** MySQL settings - You can get this info from your web host ** //
    /** The name of the database for WordPress */
    define('DB_NAME', 'schrlnek_tctblog');

    /** MySQL database username */
    define('DB_USER', 'schrlnek_tctblog');

    /** MySQL database password */
    define('DB_PASSWORD', '8L,x(z)2eDTbcABWq7gv');

    /** MySQL hostname */
    define('DB_HOST', 'localhost');
}


/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'put your unique phrase here');
define('SECURE_AUTH_KEY', 'put your unique phrase here');
define('LOGGED_IN_KEY', 'put your unique phrase here');
define('NONCE_KEY', 'put your unique phrase here');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define ('WPLANG', '');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') ) {
	define('ABSPATH', dirname(__FILE__) . '/');
    //echo dirname(__FILE__) . '/';
}

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');