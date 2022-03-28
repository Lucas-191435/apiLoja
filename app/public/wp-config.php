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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'l9Q05UPqFo1kEpGkR4UAQ7ahN63mnttZjcNjnfR2NeRhftFULgjL3Ow/YqSPuOktnhbxZp0Lx1VogzVOXiu1/Q==');
define('SECURE_AUTH_KEY',  'Kahn9Ka+Mlbhbj8hyJEkrbbmg8fEL6VieQXFemorwlxu0xlTIQoOygDDb+lqThHGX+NHfhClszgMUHjuGDOqBQ==');
define('LOGGED_IN_KEY',    'eqUT6tnndB8vhK23ylN+oOh6FynM/usONrviTicdGRSwU3zTsCASQGeh3kRw/H5hEPM0p+qDScYlSxeHqZafog==');
define('NONCE_KEY',        'qdd60U8l4v+TzwTsEt7Tj5x2vqOiahp3H3/u9vJdmckOPV8JKGrRoK29e2gF5x1pEBBQwlXu88s8/4+nX0Fdtw==');
define('AUTH_SALT',        '43cHXgR9bUN114SDJVwOJ/JUeeKTCXfb3pvbq+hV02FU/u16Os+MwathKf/duIpYMcsQfKsI+qr4uMzZpZHYaw==');
define('SECURE_AUTH_SALT', 'RZb6Xph54q7E5/fQw1EtDXSLqjpPeY2aBgv6pvBIDxz6PA1s3ugDu5nWD2+9JtObIFq7xB0zqwfcEQjNGnkKjQ==');
define('LOGGED_IN_SALT',   'PHQaoukiRMBm6pku+NGJococ6qYo8rb9RLi1+JBwzixefVI5xteS5c+p3IeGN5a74+M54PSVqKdqU7m4wTS6Nw==');
define('NONCE_SALT',       '92I+adVF6WmmQOTwEBT82yt/MogkDN6QCnOEtl49aXqNZpLv4O86ArIIjzd8KbVYInZDGiaToCqNS6YFhgHX5A==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define('JWT_AUTH_SECRET_KEY', 'W>/)120]pI;->~s=I*O`UI7Nt^+ff[J?s5)8j+LJkyOY*&+;Lm|EO1B&z?bWw~R+');
define('JWT_AUTH_CORS_ENABLE', true);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
