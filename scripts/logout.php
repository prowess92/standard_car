<?php
ob_start();
session_start();
require('defaults.php');
//database connection 
 $connect = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die('cant connect to mysql: '.mysql_error());
$db = mysql_select_db(DB_NAME, $connect) or die('cant select database: '.mysql_error());
 

mysql_close();
session_destroy();

header('location:../app/login.php');
exit;
?>
