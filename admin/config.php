<?php
// HTTP
define('HTTP_SERVER', 'http://10.1.1.90/mgpapelaria/admin/');
define('HTTP_CATALOG', 'http://10.1.1.90/mgpapelaria/');

// HTTPS
define('HTTPS_SERVER', 'http://10.1.1.90/mgpapelaria/admin/');
define('HTTPS_CATALOG', 'http://10.1.1.90/mgpapelaria/');

// DIR
define('DIR_APPLICATION', '/var/www/mgpapelaria/admin/');
define('DIR_SYSTEM', '/var/www/mgpapelaria/system/');
define('DIR_IMAGE', '/var/www/mgpapelaria/image/');
define('DIR_STORAGE', '/var/www/mgpapelaria/storage/');
define('DIR_CATALOG', '/var/www/mgpapelaria/catalog/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/template/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mpdo');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '123');
define('DB_DATABASE', 'mgpapelaria');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');

// OpenCart API
define('OPENCART_SERVER', 'https://www.opencart.com/');
