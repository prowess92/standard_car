<?php
ob_start();
session_start();
require('defaults.php');

$connect = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die('cant connect to mysql: '.mysql_error());
$db = mysql_select_db(DB_NAME, $connect) or die('cant select database: '.mysql_error());
$username = $_SESSION['username'];


if (isset($_SESSION['id'])){
	
		$right_now = mktime(date("H"), date("i"), date("s"), date("m"), date("d"), date("Y"));
			$date_now = date("Y-m-d H:i:s", $right_now);
			
			
			$q="SELECT * FROM `user_log` WHERE `username`='$username'";
			$r=mysql_query($q,$connect);
			$s=mysql_fetch_array($r);
			$times=$s['times'];
			$new_time=$times+1;
			
			$query = "UPDATE `user_log` SET `times` = '$new_time', `last_login`= '$date_now' WHERE `username` = '$username'";
			mysql_query($query,$connect);
			
		
		header('location:../app/');
			}
else{
	header('location:../app/');
	}	

?>
