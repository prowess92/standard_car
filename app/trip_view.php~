<?php
session_start(); 
function ShowDate($date)
		{
			$Future_dateAndTime_Array = explode(" ", $date);
			$dateArray = explode("-", $Future_dateAndTime_Array[0]);
			$timeArray = explode(":", $Future_dateAndTime_Array[1]);
			$FutureYr = $dateArray[0]; $FutureMnth = $dateArray[1];
			$FutureDy = $dateArray[2]; 
			
			
			
			if ($FutureMnth=='1'){
					$dob= $FutureDy."&nbsp;January,&nbsp;".$FutureYr;
				}
			else if($FutureMnth=='2'){
					$dob= $FutureDy."&nbsp;February,&nbsp;".$FutureYr;
				}
			else if($FutureMnth=='3'){
					$dob= $FutureDy."&nbsp;March,&nbsp;".$FutureYr;
				}
			else if($FutureMnth=='4'){
					$dob= $FutureDy."&nbsp;April,&nbsp;".$FutureYr;
				}			
			else if($FutureMnth=='5'){
					$dob= $FutureDy."&nbsp;June,&nbsp;".$FutureYr;
				}
			else if($FutureMnth=='6'){
					$dob= $FutureDy."&nbsp;June,&nbsp;".$FutureYr;
				}
			else if($FutureMnth=='7'){
					$dob= $FutureDy."&nbsp;July,&nbsp;".$FutureYr;
				}
			else if($FutureMnth=='8'){
					$dob= $FutureDy."&nbsp;August,&nbsp;".$FutureYr;
				}
			else if($FutureMnth=='9'){
					$dob= $FutureDy."&nbsp;September,&nbsp;".$FutureYr;
				}
			else if($FutureMnth=='10'){
					$dob= $FutureDy."&nbsp;October,&nbsp;".$FutureYr;
				}
			else if($FutureMnth=='11'){
					$dob= $FutureDy."&nbsp;November,&nbsp;".$FutureYr;
				}
			else if($FutureMnth=='12'){
					$dob= $FutureDy."&nbsp;December,&nbsp;".$FutureYr;
				}	
			return $dob;
			}

	require('../scripts/defaults.php');

	$connect = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die('cant connect to mysql: '.mysql_error());
	$db = mysql_select_db(DB_NAME, $connect) or die('cant select database: '.mysql_error());
	$booking_id = $_GET['id'];
	$q="SELECT * FROM `bookings` WHERE `booking_id` = '$booking_id'";
	$r=mysql_query($q,$connect);
	$s=mysql_fetch_array($r);

	$district_id = $s['district_id'];
	$a="SELECT * FROM district WHERE `district_id` = '$district_id' ";
	$b=mysql_query($a,$connect);
	$c=mysql_fetch_array($b);

	$staff_id = $s['created_by'];
	$d="SELECT * FROM staff WHERE `staff_id` = '$staff_id' ";
	$e=mysql_query($d,$connect);
	$f=mysql_fetch_array($e);

	$driver_id = $s['driver_id'];
	$g="SELECT * FROM staff WHERE `staff_id` = '$driver_id' ";
	$h=mysql_query($g,$connect);
	$i=mysql_fetch_array($h);

	$car_id = $s['car_id'];
	$j="SELECT * FROM cars WHERE `car_id` = '$car_id' ";
	$k=mysql_query($j,$connect);
	$l=mysql_fetch_array($k);


	echo "<span id ='box'style='color:#3f4fd2;text-align:center'> The trip is for ".$c['name']." and the exact location is ".$s['loc_desc']."</span>";
	echo "<span id='box' style='text-align:center'>Vehicle to be used</br><span style='color:#3f4fd2;'>".$l['make']."&nbsp;".$l['model']."&nbsp;with registration number:&nbsp;".$l['reg_num']."</span></span>";
	echo "<span id='box'>Date of use:&nbsp;<span style='color:#3f4fd2;text-align:right'>".ShowDate($s['date_use'])."</span></span>";
	echo "<span id='box'>Date of return:&nbsp;<span style='color:#3f4fd2;text-align:right'>".ShowDate($s['date_return'])."</span></span>";
	if ($_SESSION['privileges'] == "admin" || $_SESSION['privileges'] == "staff"){
	echo "<span id='box'>Assigned driver:&nbsp;<span style='color:#3f4fd2;text-align:right'>".$i['firstname']."&nbsp;".$i['surname']."</span></span>";
	 if($_SESSION['privileges'] == "admin"){
		echo "<span id='box'>Booking made by:&nbsp;<span style='color:#3f4fd2;text-align:right'>".$f['firstname']."&nbsp;".$f['surname']."</span></span>";
		}
	}else if($_SESSION['privileges'] == "driver"){
	echo "<span id='box'>Booking made by:&nbsp;<span style='color:#3f4fd2;text-align:right'>".$f['firstname']."&nbsp;".$f['surname']."</span></span>";
	}
	
	      
 ?>

