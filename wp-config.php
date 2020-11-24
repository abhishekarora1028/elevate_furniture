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

define( 'DB_NAME', "elevate_furniture_new" );


/** MySQL database username */

define( 'DB_USER', "root" );


/** MySQL database password */

define( 'DB_PASSWORD', "" );


/** MySQL hostname */

define( 'DB_HOST', "localhost" );


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

define( 'AUTH_KEY',         'hu!U-w7A?<I6:@NS7HOKY9HIDyFFfaagOJjp19UIgCQ^uG`L1z`+b5g:I*VD19TM' );

define( 'SECURE_AUTH_KEY',  '&;KoD|O8~o:aG|+K|H1z(d]:x6D*M`soL{D)@l5A1]@z!e^V]NU3IYkmU=k^>^>)' );

define( 'LOGGED_IN_KEY',    'Mgn}Td-n^h? 6CB&rjev[2^7`ApgQ=y^`2w*sR(svum>9+e,[EDr@@{CRO:5mJ)J' );

define( 'NONCE_KEY',        '3Dvo9o&kt5]GZV?f?*s2pb^Z?jPoZ7E@D;dV`-wl[mcM<:UwO*#N]t,4X>U3|wd]' );

define( 'AUTH_SALT',        ';3!<f_S`wWr?H<5hflr8(;6NKOYEkm;DL)5KD21Si]:opfOtg.c@.MYuRQwqpX1k' );

define( 'SECURE_AUTH_SALT', '2)AY{#}Zt^#5{Gf)hM8a7TyWO[t<ks^>)htq:?4qG~7qU:5=lb{>Jm_7ElL#)N:p' );

define( 'LOGGED_IN_SALT',   '-%]j 5q du}>#3B,f>R*/km~s`yUo^VJ$K|sqBwOX[a=#+!lgGgox/{fAJRjS+s$' );

define( 'NONCE_SALT',       '6 %ic9OlBk@A5=/y$hAnF7O4/{1,}[IcX%&PwCiwkCOZPE!}Wa*E&+FW|5IRk#<l' );


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

define( 'WP_DEBUG', true );

define( 'WP_MEMORY_LIMIT', '256M' );

define( 'WP_MAX_MEMORY_LIMIT', '256M' );

/* That's all, stop editing! Happy publishing. */


/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

}


/** Sets up WordPress vars and included files. */

require_once( ABSPATH . 'wp-settings.php' );

