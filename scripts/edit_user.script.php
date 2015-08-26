<?php
ob_start();
session_start();
require('defaults.php');
//database connection 
 $connect = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die('cant connect to mysql: '.mysql_error());
$db = mysql_select_db(DB_NAME, $connect) or die('cant select database: '.mysql_error());
 
 
if(isset($_POST['submit'])){
 //form variables

if(isset($_POST['passwd'])&&isset($_POST['password'])){
$passwd = $_POST['passwd'];
$conf_passwd = $_POST['password'];
$staff_id=$_SESSION['id'];

 
 if ($passwd == ''){
	$_SESSION['passwd'] = "<span style='color:#d85303; line-height:18px;'>Enter New Password</span><br />";
	$error = "yes";
	}
 if ($passwd != $conf_passwd){
	$_SESSION['conf_passwd'] = "<span style='color:#d85303; line-height:18px;'>Make Sure Passwords Match</span><br />";
	$error = "yes";
	}

//check if any errors
if ($error == '' || $error == 'yes'){
	$q="SELECT * FROM `staff` WHERE `staff_id`='$staff_id'";
	$r=mysql_query($q,$connect);
	$s=mysql_fetch_array($r); 
	
	$username = $s['username'];

	$query = "UPDATE `login` SET `password` = '$conf_passwd' WHERE `username` = '$username'";
	mysql_query($query);
	
 
	$_SESSION['user_added']= "<h3 ><span style='color:#0e8b1c'>".$username."'s</span>&nbsp;Password Changed</h3>";
	header('location:../app/edit_user_view.php');
	exit;
	}
	else{
	header('location:../app/edit_user_view.php');
	}
}}
?>

