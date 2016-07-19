<?php

define( 'WP_ALLOW_MULTISITE', true );
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'localhost');
define('PATH_CURRENT_SITE', '/wordpress/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);


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
define('DB_NAME', 'wptest');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'RF6NS(!.XM.N41<h:KL$g)gtZgG9$^;[7,]X?..!xbrAje!Zu@1_6tkTQFelzoBl');
define('SECURE_AUTH_KEY',  ',JblyZI*:(~.UK7)%YK).:y`GF?#rY~Hm9!oXHs]}rX~AfFzMo`zU$zlp.W~Dp{<');
define('LOGGED_IN_KEY',    'O_6#o?=F$*go?r<.BaAy0roqq(Rr>fgi7)6qLw*:b_7GB%7+l}tR.]#APEuXC8&7');
define('NONCE_KEY',        'Zgd3NAY9(6^4$cRn6swb/#.w=jM:.dC_Vf`#aZimIrt2U=M}HZo3t<T;O5cY*Xy=');
define('AUTH_SALT',        '-^weRJ(3Gw:D#+|GAr:VF8H1/cJ`]a694iPxa7t6a]@ue0^$c2&R3*HVp5Q}dCcG');
define('SECURE_AUTH_SALT', 'WKV0TG9-F=;BIW`k}ZP:)SYi gm-H. @5MH|E;ZX62?sd|$r|0>|u+EMmGi z`A.');
define('LOGGED_IN_SALT',   '[I;R;*sW:T#*|QlE:mSJ?`WY|D2LZ,xif7}kewfrlN)QB`qz}K&?d/[hAiZ# `gh');
define('NONCE_SALT',       's&9vd,ubH1#->1rttUl^%6e{1,hnO!)0zh3Fo D)S-mF#~Mce@eNN.;*ziD/8P48');

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
