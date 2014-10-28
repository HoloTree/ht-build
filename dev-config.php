<?php
/**
 * WordPress configuration for development in VVV
 */

//db
define( 'DB_NAME', 'htdev');
define( 'DB_USER', 'wp' );
define( 'DB_PASSWORD', 'wp' );
define( 'DB_HOST',  'localhost');

//auth
define('AUTH_KEY', '12345' );
define('SECURE_AUTH_KEY', '12345' );
define('LOGGED_IN_KEY', '12345' );
define('NONCE_KEY', '12345' );
define('AUTH_SALT', '12345' );
define('SECURE_AUTH_SALT', '12345' );
define('LOGGED_IN_SALT', '12345' );
define('NONCE_SALT', '12345' );

//HoloTree Debug mode
define( 'HT_DEV_MODE', true );
define( 'HT_NEW_VIEW', false );
define( 'HT_DEVICE', false );
define( 'HT_DMS_CONSENSUS_RESET_MODE', false );

//General debug
define(	'FS_METHOD', 'direct');
define( 'SAVEQUERIES', true );


//Pods debug
define( "PODS_DEVELOPER", true );
define( "PODS_GITHUB_UPDATE", true );
