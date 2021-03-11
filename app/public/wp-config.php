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
define('AUTH_KEY',         '2CZYhCh7HCniWX9MVyCt1S7URJxNSQp4D+25GxRE2xvTVtNKQI3N/QGBISZiP8lkxFXMmDRybP9gVcZKepl3DA==');
define('SECURE_AUTH_KEY',  '8AvP0MXfsbil5KEWTREMAOwxsrVydEbTucXSjM+Je0iY39iqG4Fl1v73/REsrpMJnBeq7umWXnLFvifcZP8aFw==');
define('LOGGED_IN_KEY',    'uI0wDoUUBZyohy/9yhnp8adH7vl/2XXZyhfY0ocpSJj32OvnBtMd4Qte85EeK/SC0PbxrCID7fin4i3V40FKnw==');
define('NONCE_KEY',        'DPs8GARfYm99t0g5GwM1yG7ecd9ipNXkqkStdg+UsqWulqXIopU6U+CdkInRP0mDhhzmIskpJDVl4ypo0vEH+w==');
define('AUTH_SALT',        'qmqNba9H5lKO51H9vsHwvpjtrJ5cbPxBZ1fSawrEUBYvzCEdMaQS0je4OtKxvnArlw8h9eNIEkjAUyUTItheAA==');
define('SECURE_AUTH_SALT', 'JcHmzxkZxamflV5IjBOiRvKHzij2b2Z3IPApd0f5njWbj891sicMRXC+ThhGjHE3WjMNHEjgTgU/iIWlG2t5Xw==');
define('LOGGED_IN_SALT',   'GEo1gIaFnHIYeabnr4soQ8FwfmYY/wFwhpYDBJnqpxSG05ZdjWkobG5PwOlYnTEWhA9xqvWrjK+CFo7u7ZQowg==');
define('NONCE_SALT',       'DPsFdEcksB6KZke/9uDlg99/akFwThRsScq3rBHA/fdQZaLeuqbRwsG9DOn2V31K9wG7pcIAIDPM8NhtL8GBhg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
