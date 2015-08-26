
<?php
ob_start();
 session_start();
if (isset($_SESSION['username'])){

require('defaults.php');
//database connection 
 $connect = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die('cant connect to mysql: '.mysql_error());
$db = mysql_select_db(DB_NAME, $connect) or die('cant select database: '.mysql_error());

if (empty($_FILES['uploadedfile']['name'])){
	$_SESSION['upload'] = "<p style='color:red;'>CHOOSE PHOTO BEFORE UPLOAD!!</p>";
				header('location:gallery_upload.php');
	}


 		
		$title=$_POST['title'];
 		$target_path = "../image/gallery/";
		$basename = basename( $_FILES['uploadedfile']['name']);
		
		
		$target_path = $target_path . $basename;
		
		$q="SELECT * FROM `kaggwa_gallery` WHERE `title`='$title'";
		$count=mysql_query($q,$connect);
		$sum=mysql_num_rows($count);
		
	if($sum<6){					
	if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
			
			$insert_photo = "INSERT INTO `kaggwa_gallery` (`title`, `name`) VALUES ('$title', '$basename');";
			mysql_query($insert_photo,$connect) or die('cant insert values into table: '.mysql_error());
						
			$_SESSION['upload'] =  "<span style='color:#267234'>Photo <span style='color:#8b724a'>".$basename."</span> added to gallery successfully</span><br />";
			header('location:gallery_upload.php');
			
		} else{
			
				
				$_SESSION['upload'] = "<span style='color:#fb000c;'>There was an error uploading the file, please try again!!</span><br />";
				header('location:gallery_upload.php');
			} 
	}else{
		$_SESSION['upload'] = "<span style='color:#fb000c;'>Maximum number of pictures to be added to ".$title." gallery reached!!</span><br />";
		header('location:gallery_upload.php');
		}
}

?>