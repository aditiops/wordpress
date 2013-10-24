<?php

define('DB_NAME', 'phpapp');
define('DB_USER', 'phpapp');
define('DB_PASSWORD', '212b09752d173876a84d374333ae1ffe');
define('DB_HOST', 'localhost');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');



$table_prefix  = 'wp_';

define('WPLANG', '');
define('WP_DEBUG', false);

if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

require_once(ABSPATH . 'wp-settings.php');

