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
define( 'DB_NAME', 'bookstore' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '0406' );

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
define( 'AUTH_KEY',         'h^$bE{d/bf7~mSHZPhO58O#2z=y<H5|<D8w0CT&(pN>q|[Xia#`R]dnSHwvZz .X' );
define( 'SECURE_AUTH_KEY',  'N amZN~(+WUq7MIIs4L4I2XpiRyV{B#?-ffTJq3Y22 e?X@yw^n|bW(=kiXP0`Wq' );
define( 'LOGGED_IN_KEY',    'jzC Xu>gO>f8*XF;bX3f*GPF:Up/fDP6so(vVy?SkuG1xCy!!eFQjEwcZA1F4`~{' );
define( 'NONCE_KEY',        '1d,&vDK/1Yd@MFCyq:D!RGs?uod{kWQ(@]:,r*A*~;QwRM~n=hMkOKzBUoU)jJTg' );
define( 'AUTH_SALT',        'K%>Sp$y6!PwqoDQC`f8[JbYpY7BUo],6pExf5k6%dBaeOiQFDJKs(Pm9Va>(e$G@' );
define( 'SECURE_AUTH_SALT', 'g:k@xF;TB{F !IHmN@+T1to!MqhX[iGX4A_DvCF*z_69#]Xzg{<)E #%[1E;;Z$8' );
define( 'LOGGED_IN_SALT',   'r<2tU$0ZgKEP~NRTN/)vD2~0gAEYqNSs3{^+0c^*$T|c:Q>dVhv,_K2II[EZ/y.~' );
define( 'NONCE_SALT',       '2(/>UhZ%=,VSZ8f?xH9hKo+J~s$[}9BVP=.};ty|agY@Q}I(I.8_nv;e^D7Br6c ' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
