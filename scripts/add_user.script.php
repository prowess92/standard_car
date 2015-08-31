<?php
ob_start();
session_start();
require('defaults.php');
//database connection 
 $connect = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die('cant connect to mysql: '.mysql_error());
$db = mysql_select_db(DB_NAME, $connect) or die('cant select database: '.mysql_error());
 
 
if($_SERVER['REQUEST_METHOD'] == 'POST'){
 //form variables
$fname = $_POST['fname'];
$sname = $_POST['sname'];
$passwd = $_POST['passwd'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$role = $_POST['role'];
$privileges = $role;   

$username = strtolower($_POST['fname'].'.'.$_POST['sname']);

//validation
if(empty($fname)){
	$_SESSION['fname'] = "<span style='color:brown;'>Please fill in your First Name</span><br />";
	$error = "yes";
	}
if (empty($sname)){
	$_SESSION['sname'] = "<span style='color:brown;'>Please fill in your Surname</span><br />";
	$error = "yes";
	}
if (empty($role)){
	$_SESSION['role'] = "<span style='color:brown;'>Select User's Role</span><br />";
	$error = "yes";
	}
if (empty($passwd)){
	$_SESSION['passwd'] = "<span style='color:brown;'>Please fill in your Password</span><br />";
	$error = "yes";
	}
if(empty($phone)){
				$_SESSION['phone'] = "<span style='color:brown;'>Please fill in your phone number</span>";
                $error = "yes";
			}
			else{
				$_SESSION['value_phone'] = $_POST['phone'];
			}
if(empty($email) || $email == ''){
				$_SESSION['email'] = "<span style='color:brown;'>Please fill in your email address</span>";
                $error = "yes";
			}else{
            $_SESSION['value_email'] = $_POST['email'];    
            }
//check if any errors
if ($error == ''){

//insert member registration info 
$insert_member = "INSERT INTO `staff` (`firstname`, `surname`, `phone`, `email`, `username`, `role`) VALUES ('$fname', '$sname', '$phone', '$email', '$username', '$role');";
mysql_query($insert_member,$connect);
 
$q="INSERT INTO `login` (`username`, `password`, `privileges`) VALUES ('$username', '$passwd', '$privileges');";
mysql_query($q,$connect);

$r="INSERT INTO `user_log` (`username`, `times`) VALUES ('$username', '0');";
mysql_query($r,$connect); 
 
$_SESSION['user_added']= "<h2>User&nbsp;<span style='color:#0e8b1c'>".$username."</span>&nbsp;Successfully Added</h2>";
header('location:../app/');
exit;
}
else{
	header('location:../app/add_user_view.php');
}
}
?>

