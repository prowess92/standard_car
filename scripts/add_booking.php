<?php
	ob_start();
	session_start();
	require('defaults.php');
	
	$_SESSION['expire']='no';
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		

		if(empty($_POST['district']) || empty($_POST['loc_desc']) || empty($_POST['driver']) || empty($_POST['personnel']))
		{
            if(empty($_POST['district']) || empty($_POST['district'])==''){
				$_SESSION['district'] = "<span style='color:brown;'>Please select the district that is your destination</span>";
			}
             if(empty($_POST['loc_desc']) || empty($_POST['loc_desc'])==''){
				$_SESSION['loc_desc'] = "<span style='color:brown;'>Please enter the exact location name of your destination (town or village)</span>";
			}
            if(empty($_POST['driver']) || $_POST['driver'] == '' || empty($_POST['personnel'])){
				$_SESSION['driver'] = "<span style='color:brown;'>Please choose the driver and number_format of people travelling</span>";
			}
			if(empty($_POST['start_day']) && empty($_POST['start_month']) && empty($_POST['start_year'])){
				$_SESSION['date_use'] = "<span style='color:brown;'>Please make your all fields are selected for date of vehicle use</span>";
			}
            if(empty($_POST['end_day']) && empty($_POST['end_month']) && empty($_POST['end_year'])){
				$_SESSION['date_return'] = "<span style='color:brown;'>Please make your all fields are selected for return date of vehicle</span>";
			}
			
			header('location:../app/add_booking_view.php');
		
		
		}else{            
           	$start_date = mktime('00', '00', '00', $_POST['start_month'], $_POST['start_day'], $_POST['start_year']);
	        $start_date_final = date("Y-m-d H:i:s", $start_date);
            
            $end_date = mktime('00', '00', '00', $_POST['end_month'], $_POST['end_day'], $_POST['end_year']);
            $end_date_final = date("Y-m-d H:i:s", $end_date);
            
            $car_id = $_POST['car_id'];
            $district = $_POST['district'];
            $creator = $_SESSION['id'];
            
            $loc_desc = htmlentities($_POST['loc_desc']);
            $driver = $_POST['driver'];
            $personel_num = $_POST['personnel'];
			
			$connect = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die('cant connect to mysql: '.mysql_error());
$db = mysql_select_db(DB_NAME, $connect) or die('cant select database: '.mysql_error());
						
			$sql = "INSERT INTO bookings (car_id, created_by, district_id, loc_desc, personnel_num, driver_id, date_use, date_return,  updated_by, status) VALUES ('$car_id',  '$creator', '$district', '$loc_desc', '$personel_num', '$driver', '$start_date_final', '$end_date_final',  '$creator', 'pending')";

			mysql_query($sql,$connect);
			$new_id = mysql_insert_id($connect);
            $booking_logger = "INSERT INTO bookings_log (booking_id, status ) VALUE ('$new_id', 'pending') ";
			mysql_query($booking_logger,$connect);
            
            $a = "SELECT `name` FROM `district` WHERE `district_id` = '$district'";
            $b = mysql_query($a, $connect);
            $c = mysql_fetch_array($b);
            $district = $c['name'];
            
			$_SESSION['success']="<div id='notice' style='display:block; border:1px solid #C4C9F1; width:99%; text-align: center;'>Booking for journey to <span style='color:#172AC8;'><br />".$district."&nbsp;by&nbsp;".$full_name."&nbsp;has been successfully made</div>".$js_inject;			
			header('location:../app/add_booking_view.php');
		}
           
		
	}
	?>