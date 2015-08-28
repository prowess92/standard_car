<?php
ob_start();
session_start();

//PHP.INI OVERRIDE
ini_set ( 'expect.timeout', -1 );
ini_set('memory_limit', '512M');
ini_set('post_max_size', '60M');
ini_set('upload_max_filesize', '60M');
ini_set('max_execution_time', 600);
ini_set('max_input_time', -1);
//CONSTANT VARIABLES WEBSITE
//define('DOMAIN','www.bicomalawi.org');

//CONSTANT LOCAL MACHINE
define('DOMAIN','http://localhost/standar_car/');

//DB VARIABLES WEBSITE
//define('DB_USER','bico_super');
//define('DB_PASSWORD','Jesusislord2665');
//define('DB_HOST','localhost');
//define('DB_NAME','bico_web');

//DB LOCAL MACHINE
define('DB_USER','root');
define('DB_PASSWORD','root');
define('DB_HOST','localhost');
define('DB_NAME','standard_car');

//BOOKINGS INITIALIZER
require('booking_init.php');
?>

