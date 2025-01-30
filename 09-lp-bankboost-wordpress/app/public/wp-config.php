<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'tr|k]-*z_^VbI~yJVhA G{Y4|>~p0IbYD8<-.FF*JWX1W?}`$0>$KT]>bLVs4VF~' );
define( 'SECURE_AUTH_KEY',   'l~LQLCod[^:u+g;Vo#m?97%x_(WI)i@`PMyWMurA9:TS bnHf&kxt:L^W<7app{2' );
define( 'LOGGED_IN_KEY',     '!P[EI_p3~Ko9.Ty(nJ[t4SpX)F?g~7U^]/|09Lj<uM n2H0e[317w$IOi}2CdJ_t' );
define( 'NONCE_KEY',         '-iX#abg=Y{:~8Y?UvbZ,}IZy9RM~k-f`0m~ZD&G2HG:ye+y8B$4U5UY3*#Bb6p-M' );
define( 'AUTH_SALT',         '=!:SF94$M`{m7C,CM!L9L6ndai003fg4OWfM$KHY?PRGOL&(^ZbGd?3e,/d`EqZO' );
define( 'SECURE_AUTH_SALT',  'L??&x*)Y^bB|+45Y(JOmEPMEstBG-V6S6/n~ICIj>#OVv]A8O;7SZprGjx)F;@1G' );
define( 'LOGGED_IN_SALT',    'B2.ka2JZd>.;AZ)-eYx3>P(|$ufC(uuOVbA4V0 NB@d:,NF*O$;e#}yXQuc,H3pl' );
define( 'NONCE_SALT',        '9d%V|~.bWBOd~9wF/F2N.$g.=(T;Pc-TU@MtleO%Jxq{4.yl5&-}jY|-fSbFt72;' );
define( 'WP_CACHE_KEY_SALT', 'w.%FP]p;iDX-jyX71/;>oS_bQzGgqq$l9Ca`f;pbX~2E0D&HD@+I]z@w!NK;k;jd' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
