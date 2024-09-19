<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wdpf60_wp1' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'fkFqe?<5B<]]l+v9J~Xy/yu(Yr4+CSv$({bZZ6j*5kv-}YZ WyfM$fHB&|^>th:%' );
define( 'SECURE_AUTH_KEY',  '{n~t7X)9@>Qo:7-j_n/k!ZxLc/Gq ~QyAH%)(>@@QyQOc{eA%f=>N.pj*u@<iTK*' );
define( 'LOGGED_IN_KEY',    'VN};RI} L-J@Tf}su?4$C&-$gdki:fyK|6mXgKl5595m:t?@!_f^IX*`6TM^ymzE' );
define( 'NONCE_KEY',        'z6>dYRGpQNJ($@Ij=%ZRVi<A*a<&SCs>;C<-h34_D@x^rEpvD1{mT}]GUz+r3}S2' );
define( 'AUTH_SALT',        '$[3.S3Y4C9n!E+mtMp6h#I*:{6+MVKCoh(o~E}@F:.?<YDq?Kc`H|{2; 3:T3O|g' );
define( 'SECURE_AUTH_SALT', 'bW:l&S-a;z{SQRe[%~aF+P:1eU.~~n8oTW.iEM0r1J%Ok7.Ddrm5wq?#SMA+<~r/' );
define( 'LOGGED_IN_SALT',   '97HgvT6__|M13]N@=P%C(oE)<<iC6>an$AGjgLy1l4Gz%riV=:Jc-nIDhIjwQ}eK' );
define( 'NONCE_SALT',       'o`cbB2$t[ZGCk>@G?}^f<ND3lzk}:2*OE>6OV??QH=}*>im6]MY:kb=fl>e82H4h' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
