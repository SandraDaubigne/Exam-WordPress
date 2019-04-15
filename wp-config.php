<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'sista');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '0kA)`[`Xi+gjq3tbpGE%lU}28Mfs!Zrs|o:X0mr.Mz%3k22k}bKyl-=eRT.l,d;O');
define('SECURE_AUTH_KEY',  'Exi17&[),niT-c0gu^W4CP)Kksj4;wV5bY5uWx5E]2mG()q+loL-NedU1Rw&:,H1');
define('LOGGED_IN_KEY',    'c2dbyg,Yn@]aM.iohhU0qPcNx 2YA3HbLJiz{65{dg;R5][?w*L`7L}U5jA>eWE)');
define('NONCE_KEY',        '?8V$[rVcxh8wQ4C(5&9Mqk5=}GI/LE)[v#9AeL<WIA$q2,2GIP|a-mbN<5{*}{Th');
define('AUTH_SALT',        'wR![PnPLouHE:vF~aU~d!rUVG8L.#Euo?07lpg2 jI63`OeN{D}IHx.r;_GBE=k8');
define('SECURE_AUTH_SALT', '<@m~D5vvb~n*/0qPOYh*=aqIBVTvn_o$7wnEHQ*B+q*8ov8j@om:tdC>`TKb_fDD');
define('LOGGED_IN_SALT',   'N.D~nq<=7|LWm%t4>Tvk|I@qJ~ACsS-7KcN}kU5*JTgMq&zDvnE44n-E8ue{{*/h');
define('NONCE_SALT',       'bMm9e5PmWnE#685k/W{tIi9Ecu%U@*W<NBjin8+d<SF:GQg!9N6XGv]1,-Ra7j.{');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);
/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'localhost');
define('PATH_CURRENT_SITE', '/sista/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
