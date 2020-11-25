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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '&_r()]V8&|:UA@^i:M)@V)TK#N)R>5@ANKe1]l9woVfH1(qj2{>jZ.[TqKwO$UKi' );
define( 'SECURE_AUTH_KEY',  '?>7dU!eRAn[epxHCTez]Ujm;n4>0zY4:;3Vwipd;f=v$htj` eVv{0~p+Re{lrrp' );
define( 'LOGGED_IN_KEY',    '5zHd-;&#g6quqaWjA.;wBX~Nlx5V&~&0+j.-3E,R|e!{?`-wb.YWRD!!pa|=iINT' );
define( 'NONCE_KEY',        'fvBDn_Wz^fZoRwzvipIi,m=WEtwE$hQk6IppBL4T}k:b-6O4[UR$`Z~W{T7tCw[2' );
define( 'AUTH_SALT',        'qmynzNmKz|%JhO;z;f}aZ~7?nhE1w8kQo4*}sJhOcNK_;R*w_:h$bbcViJ~T&NDQ' );
define( 'SECURE_AUTH_SALT', 'a%Ovh~;Pq;h$iUXz5rF3s 4QAm4ICy9]g,|Oo99jH(iLl?q{4:l&0>Eg{UN4-0PL' );
define( 'LOGGED_IN_SALT',   '-=lczk#H?1jJNMej$WRX(Lg[o[{xsC[Jp`2P0:ue@dp>$T(0xPD|MaV(*Gwn6TQc' );
define( 'NONCE_SALT',       'Ii`4=CpDnPQH[x{1|B.5C5r$@e1oa0D2D>@[@e5=V,7w8e<d?E6FN1OJ_;jxFF6)' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
