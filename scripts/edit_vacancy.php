<?php
	ob_start();
	session_start();
	require('defaults.php');
	
	$_SESSION['expire']='no';
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		

		if(empty($_POST['status']) || empty($_POST['title']) || empty($_POST['location']) || empty($_POST['contract_type'])||empty($_POST['day'])||empty($_POST['month'])||empty($_POST['year'])||empty($_FILES['uploadedfile']['name']))
		{
			if(empty($_POST['title'])){
				$_SESSION['title'] = "<span style='color:brown;'>Please fill in the job title</span>";
                unset($_SESSION['value_title']);
			}
			else{
				$_SESSION['value_title'] = $_POST['title'];
			}
			if(empty($_POST['location'])){
				$_SESSION['location'] = "<span style='color:brown;'>Please fill in the post location</span>";
                unset($_SESSION['value_location'] );
			}
			else{
				$_SESSION['value_location'] = $_POST['location'];
			}
			if(empty($_POST['contract_type'])){
				$_SESSION['contract_type'] = "<span style='color:brown;'>Please choose contract type</span>";
                unset($_SESSION['value_contract_type']);
			}
			else{
				$_SESSION['value_contract_type'] = $_POST['contract_type'];
			}
			if(empty($_POST['day'])){
			$_SESSION['deadline']="<span style='color:brown;'>Please Select Start Time of Event</span>";
			
			}
			if(empty($_POST['month'])){
			$_SESSION['deadline']="<span style='color:brown;'>Please Select Start Time of Event</span>";
			
			}
			if(empty($_POST['year'])){
			$_SESSION['deadline']="<span style='color:brown;'>Please Select Start Time of Event</span>";
			
			}
			if (empty($_FILES['uploadedfile']['name'])){
	$_SESSION['upload'] = "<span style='color:brown;'>Choose PDF File Before Upload</span>";
	       }
			
			
			
			header('location:../app/add_vacancy_view.php');
		
		
		}
		else{
			
			//if($_POST['dis_year']<date("Y")||$_POST['dis_month']<date("n")||$_POST['day_for_dis']<date("j")||$_POST['day_for_dis']<date("j")||$_POST['dis_hr']<date("G")||$_POST['dis_min']<date("i")){
				//$_SESSION['dis_time']="<br /><span style='color:brown;'>Select a future date</span><br />";
				//header('location:../add_new_discussion.php');
				
				//}
			
			
			
				
				
				
				
			//Script - Edit vacancy
	       $job_id = $_POST['job_id'];
			//TimeStamp for deadline!
			$day = $_POST['day'];
			$month = $_POST['month'];
			$year = $_POST['year'];
			$contract_type = $_POST['contract_type'];
			$status = $_POST['status'];
						
			$date = mktime(0, 0, 0, $month, $day, $year);
			$date_stamp = date("Y-m-d H:i:s", $date);
				
	$title = htmlentities($_POST['title']);
	$location = $_POST['location'];
	$contract_type = $_POST['contract_type'];
			
			//pdf file upload script



 		
		$doc_name=$_POST['title'];
        $file_name = explode(" ", $doc_name);
          $array_length = count($file_name);
          for($i=0;$i<$array_length;$i++){
               $basename = $basename."_".$file_name[$i];
               }
		//echo $doc_name;
 		$target_path = "../jobs/";
		$basename = $basename.".pdf";
		//echo $basename;
		
		$target_path = $target_path . $basename;
		
		//echo $target_path;
        $checker = basename( $_FILES['uploadedfile']['name']);
		$check = explode(".", $checker);
		if($check[1]=="pdf" || $check[1]=="PDF"){				
	if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
			//echo 'yes';
	       
			$connect = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die('cant connect to mysql: '.mysql_error());
$db = mysql_select_db(DB_NAME, $connect) or die('cant select database: '.mysql_error());
			
            $q="SELECT `desc_pdf` FROM `vacancy` WHERE `job_id`='$job_id'";
$r=mysql_query($q,$connect);
$s=mysql_fetch_array($r);
$delete_file="../jobs/".$s['desc_pdf'];
			
			$sql = "UPDATE vacancy SET title = '$title', location = '$location' , contract_type = '$contract_type', deadline = '$date_stamp' , desc_pdf = '$basename', status =  '$status'  WHERE job_id = '$job_id'";

			mysql_query($sql,$connect);
			
			
			$_SESSION['success']="<div style='display:block; background:#fbfab4; width:400px; text-align: center;'>&nbsp;&nbsp;Vacancy&nbsp;<span style='color:#016b22;'>".$title."</span>&nbsp;successfully changed</div>";			
			//unlink($delete_file);
            header('location:../app/edit_vacancy_view.php');
		}else{
			//echo 'no';
			$_SESSION['upload'] = "<span style='color:#fb000c;'>There was an error uploading the file, please try again!!</span><br />";
				header('location:../app/add_vacancy_view.php');
			
			} 
		}else{
			$_SESSION['upload'] = "<span style='color:#fb000c;'>ERROR: Only PDF file format allowed!!</span><br />";
				header('../app/add_vacancy_view.php   ');
		}
		
		}
	}

	
		
	
	?>
