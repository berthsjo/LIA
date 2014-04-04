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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '_g+[,1IVZ8H@,3g1SWg?fAa;~!h]fd~St8gtuaHX}MD#;VUIt`;1x^xUPL%{N04a');
define('SECURE_AUTH_KEY',  'BdZX}h) -[{LhEYp:{]3LJ/a{sq(<e,jr%~ybD(bPtn49M/go9{G;cMWDiD.UpPY');
define('LOGGED_IN_KEY',    'nR~|+uTCakc.uY47cXIl%b=`;p]i]S/c`Z`g|?k~!+oYU+.:grshw!9})Shs|sTI');
define('NONCE_KEY',        '_7y>.}TL!ESZ|jM}$mMV8|8I<e,=a?+y2B$CK.9 tJX~hI_OyiV-rHW;]@$q>zcg');
define('AUTH_SALT',        '@I(k0_*[UFzOYY2a1hxhxAK>F |p&+FX%puYY?/KRn.&+BO&mJ(Ci6I;[I<+#^Rn');
define('SECURE_AUTH_SALT', 'C$9u5Qzw+IICTfIkW<W=HsgoI1DT3d g&A65xU-P$-).Y^.;RUBBBud}/$Z*Vrag');
define('LOGGED_IN_SALT',   '<+||!zx$w=ui<Zc|V2FZHBx2ABlc^&[DCj,?fVZ82YRY.AnGda|H$vL<1p6zD2YG');
define('NONCE_SALT',       '5fRALp`hE.R;@O/ @-(2o|Ra#l,B:OYK-%WiSK|%%*#QZC^LpAG,<c7:Kkp)tka%');

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
