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

//SESSION CONFIG
session_set_cookie_params(86400);
ini_set('session.gc_maxlifetime', 86400);

//CONSTANT SERVER MACHINE
define('DOMAIN','http://localhost/standar_car/');

//DB LOCAL MACHINE
define('DB_USER','root');
define('DB_PASSWORD','root');
define('DB_HOST','localhost');
define('DB_NAME','standard_car');

//BOOKINGS INITIALIZER
require('booking_init.php');
?>

