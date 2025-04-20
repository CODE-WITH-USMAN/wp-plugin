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
define( 'DB_NAME', 'streaks' );

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
define( 'AUTH_KEY',         '4@!_%Zz9ACLY-f;z03|Ljb^3C+ChLg?,djo$sl3rlr;F,N:YK*In^*uG[4J1]h .' );
define( 'SECURE_AUTH_KEY',  'Pw}ggymdx^,^yJ1HP.lau_|3X@|PTub}=KD{d##SoH>)$QAf*AO7.%#ElWJjn5?c' );
define( 'LOGGED_IN_KEY',    'zorP-D/+2ro<AY$rA3~irlX]}NXKn_mN>KV>0/[@][~-)J#iWt>p>muNfw ^xR%c' );
define( 'NONCE_KEY',        'RFS>*tlW}Y%FS_z~P<QaB{_66(t?)eIIPp(;KL7wSFH6Jh]~&=wwzWEal?nNkIos' );
define( 'AUTH_SALT',        'se3L#~a|m {^$-mg1^4VP|Dv}6$0TKxdtu#S9V;M_q>jhFWTn0;]p-uPQ(9RC<+N' );
define( 'SECURE_AUTH_SALT', '^8JJRo`KC<0]=._MCAIB+tu9$Fmqv$vmcU{<VcVxtV,^O?|OAC794p_qm{bL?^23' );
define( 'LOGGED_IN_SALT',   '|soscVdEdFl$L?,sz?^{uLqBsY%L/U0PbU^6.=Jd=2q#pTuR4)nlr^ -]yL6]rDT' );
define( 'NONCE_SALT',       'pvBoM.SElfa[Mv`H=ExukvFT~yp7#aT@4<oT!*6ECio,T_bP+EKc7k&Hj28p}Jd]' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
