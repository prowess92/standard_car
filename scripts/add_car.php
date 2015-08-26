<?php
	ob_start();
	session_start();
	require('defaults.php');
	
	$_SESSION['expire']='no';
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		

		if(empty($_POST['make']) || empty($_POST['model']) || empty($_POST['type']))
		{
			if(empty($_POST['make'])){
				$_SESSION['make'] = "<span style='color:brown;'>Please fill in the car's make</span>";
			}
			else{
				$_SESSION['value_make'] = $_POST['make'];
        }
        if(empty($_POST['model'])){
				$_SESSION['model'] = "<span style='color:brown;'>Please fill in the car's model</span>";
			}
			else{
				$_SESSION['value_model'] = $_POST['model'];
			}
			if(empty($_POST['type']) || empty($_POST['type'])==''){
				$_SESSION['type'] = "<span style='color:brown;'>Please select the car's type</span>";
			}
            if(empty($_POST['year']) || empty($_POST['year'])==''){
				$_SESSION['year'] = "<span style='color:brown;'>Please select the car's year of make</span>";
			}
             if(empty($_POST['ownership']) || empty($_POST['ownership'])==''){
				$_SESSION['ownership'] = "<span style='color:brown;'>Please select the car's owner</span>";
			}
            if(empty($_POST['reg'])){
				$_SESSION['reg'] = "<span style='color:brown;'>Please enter the car's registration number</span>";
			}
			else{
				$_SESSION['value_reg'] = $_POST['reg'];
			}
			
			header('location:../app/add_car_view.php');
		
		
		}
		else{
			
            $make = strtoupper(htmlentities($_POST['make']));
            $model = strtoupper(htmlentities($_POST['model']));
            $type = $_POST['type'];
            $year = $_POST['year'];
            $creator = $_POST['current_user'];
            $ownership = $_POST['ownership'];
            $reg = strtoupper(htmlentities($_POST['reg']));
			
			$connect = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die('cant connect to mysql: '.mysql_error());
$db = mysql_select_db(DB_NAME, $connect) or die('cant select database: '.mysql_error());
						
			$sql = "INSERT INTO cars (make, model, ownership, type, year, reg_num, created_by) VALUES ('$make', '$model', '$ownership', '$type', '$year', '$reg', '$creator')";

			mysql_query($sql,$connect);
			
			
			$_SESSION['success']="<div style='display:block; border:1px solid #C4C9F1; width:99%; text-align: center;'>&nbsp;&nbsp;a&nbsp;<span style='color:#172AC8;'>".$year."&nbsp;".$make."&nbsp;".$model."&nbsp;</span>with registration number:&nbsp;<span style='color:#172AC8;'>".$reg."</span>&nbsp;has been added</div>";			
			header('location:../app/add_car_view.php');
           
		}
           
		
	}
	?>