<?php
ob_start();
session_start();
if(isset($_SESSION['username'])&&isset($_SESSION['section'])&&isset($_SESSION['privileges'])){
$staff_id=$_GET['staff_id'];
$login_id=$_GET['login_id'];
$log_id=$_GET['log_id'];

if (isset($_GET['staff_id'])&& is_numeric($_GET['staff_id'])&&isset($_GET['login_id'])&& is_numeric($_GET['login_id'])&&isset($_GET['log_id'])&& is_numeric($_GET['log_id']))
{
require('defaults.php');
//database connection 
 $connect = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die('cant connect to mysql: '.mysql_error());
$db = mysql_select_db(DB_NAME, $connect) or die('cant select database: '.mysql_error());
 


$q="DELETE FROM `staff` WHERE `staff_id`='$staff_id'";
mysql_query($q,$connect);

$r="DELETE FROM `login` WHERE `id`='$login_id'";
mysql_query($r,$connect);

$s="DELETE FROM `user_log` WHERE `log_id`='$log_id'";
mysql_query($s,$connect);

header('location:../admin_access.php');
}}
?>