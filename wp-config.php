<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'benatto');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'NH_2apXdK&=B8w2TJ^4$M3QgvZY%gi+q}>.BQDi$;N`oY(PLe Z:Ca[H2At-P 2G');
define('SECURE_AUTH_KEY',  '9~i.C~#Vnd<6S9Iv_; D[RzT*}%6XbJ+7DaTyx:wtNWnMV3 $SidV}RYmN,R/w,=');
define('LOGGED_IN_KEY',    '@lWF9Z2Q^m|lTuU=B;9*-w1gi7+-[$iDn~.eIWpO_Bb{eD3kynI:_bv9`PS]|.qq');
define('NONCE_KEY',        'Y9m`7|qEM`S~BE-tIh.kH]ARvV<_lX|M6iQR%FZV+py1;Gc%1=jU&rp)zW&n*7f^');
define('AUTH_SALT',        'wH3DY,{<Uxw)~|pM)y+,=E.F&ab*n[P%Mr-dJZtJ8r5!n|q`-#**6X/j5+^![*%N');
define('SECURE_AUTH_SALT', '!^-(qJkS}e-oq:-]q2EE5Kf`Iwxl0sc2WX4/0^}$~%*G{yf6=z&U1TGQ-U;1_z`{');
define('LOGGED_IN_SALT',   'V!u]jw,5t^lg4E/.2ws1_mWAzHlT- f&LP7zSk.;|+(6J%LQWbhjK|#{: #=ioDj');
define('NONCE_SALT',       'YQASIC$fg>e1+(_t*AtOgySv+KpoG|jDdIL-.qg,!^qvH,^8o|lde<SdOM!+%Tqw');

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
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
