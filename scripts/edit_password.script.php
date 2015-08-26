<?php
ob_start();
session_start();
require('defaults.php');
//database connection 
 $connect = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die('cant connect to mysql: '.mysql_error());
$db = mysql_select_db(DB_NAME, $connect) or die('cant select database: '.mysql_error());
 $username=$_SESSION['username'];
 
if(isset($_POST['submit'])){
 //form variables

if(isset($_POST['passwd'])&&isset($_POST['conf_passwd'])){
$passwd = $_POST['passwd'];
$conf_passwd = $_POST['conf_passwd'];
$old_passwd=$_POST['old_passwd'];
 
$l="SELECT `password` FROM `login` WHERE `username`='$username'";
$m=mysql_query($l,$connect);
$n=mysql_fetch_array($m);

 
 if ($old_passwd != $n['password']){
	$_SESSION['old_passwd'] = "<span style='color:#d85303; line-height:18px;'>Incorrect Old Password</span><br />";
	$error = "yes";
	}else{
 if ($passwd == ''){
	$_SESSION['passwd'] = "<span style='color:#d85303; line-height:18px;'>Enter New Password</span><br />";
	$error = "yes";
	}
 if ($passwd != $conf_passwd){
	$_SESSION['conf_passwd'] = "<span style='color:#d85303; line-height:18px;'>Make Sure Passwords Match</span><br />";
	$error = "yes";
	}
	}
//check if any errors
if ($error == ''){
	
	$query = "UPDATE `login` SET `password` = '$passwd' WHERE `username` = '$username'";
	mysql_query($query);
	
	 
	$_SESSION['user_added']= "<h3 style='color:#0e8b1c'>Password Changed Succesfully</h3>";
	header('location:user_access.php');
	exit;
	}
	else{
	header('location:edit_password.php');
	}
}}
?>

