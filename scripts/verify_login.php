<?php
ob_start();
session_start();
require('defaults.php');
//database connection 
 $connect = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die('cant connect to mysql: '.mysql_error());
$db = mysql_select_db(DB_NAME, $connect) or die('cant select database: '.mysql_error());

//form variables
$username = $_POST['username'];
$password = $_POST['password'];

//get username and password fields from table
$login = "SELECT * FROM `login`;";

$select_query = mysql_query($login,$connect);
$num_rows = mysql_num_rows($select_query);

$index = 0;
$usernames;
$passwd;
while ($num_rows>0){
$rows = mysql_fetch_assoc($select_query);
$usernames[$index] = $rows['username'];
$passwd[$index] = $rows['password'];
$privileges= $rows['privileges'];
	if ($usernames[$index] == $username){
			if($passwd[$index] == $password){
				//identify user details
				$select2 = "SELECT * FROM `staff` WHERE `username` = '$username';";
				$select_query2 = mysql_query($select2,$connect);
				$fields = mysql_fetch_assoc($select_query2);
				
													
				//start user session
				$_SESSION['username'] = $username;
				$_SESSION['name'] = $fields['firstname']." ".$fields['surname'];
				$_SESSION['id'] = $fields['staff_id'];
				
					
				$_SESSION['privileges'] = $privileges;
								
								
				header('location:user_access.php'); 
				exit;
				
				}
			else{
				
				
				$_SESSION['error']='<script type="text/javascript">
                alert("invalid password and username combination");
                </script>';
				
				header('location:../app/login.php');
				exit;
			}
		break;
		}
	else{		
		if($num_rows == 1){							
//no username found stuff here
				
				
				$_SESSION['error']='<script type="text/javascript">
                alert("invalid password and username combination");
                </script>';
				
				header('location:../app/login.php');
				exit;
			
			}
		else{
			$index++;
			$num_rows--;
			}
		}


}
//


?>
