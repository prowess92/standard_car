<?php
	ob_start();
	session_start();
	require('defaults.php');
	
	$_SESSION['expire']='no';
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$type = $_POST['type'];

		if(empty($_POST['title']) || empty($_POST['description']) || empty($_FILES['uploadedfile']['name']))
		{
			if(empty($_POST['title'])){
				$_SESSION['title'] = "<span style='color:brown;'>Please fill in the article title</span>";
			}
			else{
				$_SESSION['value_title'] = $_POST['title'];
        }
        if(empty($_POST['description'])){
				$_SESSION['description'] = "<span style='color:brown;'>Please fill in the article's description</span>";
			}
			else{
				$_SESSION['value_description'] = $_POST['description'];
			}
			if (empty($_FILES['uploadedfile']['name'])){
	$_SESSION['upload'] = "<span style='color:brown;'>Choose article's File Before Upload</span>";
	       }
			
			
			if ($type == "article"){
			header('location:../app/add_article_view.php');
            }else if ($type == "publication"){
            header('location:../app/add_publication_view.php');    
            } 
		
		
		}
		else{
			
			//if($_POST['dis_year']<date("Y")||$_POST['dis_month']<date("n")||$_POST['day_for_dis']<date("j")||$_POST['day_for_dis']<date("j")||$_POST['dis_hr']<date("G")||$_POST['dis_min']<date("i")){
				//$_SESSION['dis_time']="<br /><span style='color:brown;'>Select a future date</span><br />";
				//header('location:../add_new_discussion.php');
				
				//}
			
			
			
				
				
				
				
			//Script - Add New Event
	
			//TimeStamp for deadline!
				
	$title = $_POST['title'];
	$description = htmlentities($_POST['description']);
    
			//pdf file upload script



 		
		$doc_name=$_POST['title'];
        $file_name = explode(" ", $doc_name);
          $array_length = count($file_name);
          for($i=0;$i<$array_length;$i++){
               $basename = $basename."_".$file_name[$i];
               }
		//echo $doc_name;
 		if ($type == "article"){
        $target_path = "../files/articles/";
		}else if ($type == "publication"){
         $target_path = "../files/publications/";   
        }
        $basename = $basename.".pdf";
		//echo $basename;
		
		$target_path = $target_path . $basename;
		
		//echo $target_path;
        $checker = basename( $_FILES['uploadedfile']['name']);
		$check = explode(".", $checker);
		if($_FILES['uploadedfile']['type'] == 'application/pdf'){				
	if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
			//echo 'yes';
	       
			$connect = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die('cant connect to mysql: '.mysql_error());
$db = mysql_select_db(DB_NAME, $connect) or die('cant select database: '.mysql_error());
						
			$sql = "INSERT INTO journal (title, description, type, journal_pdf) VALUES ('$title', '$description', '$type', '$basename')";

			mysql_query($sql,$connect);
			
			
			$_SESSION['success']="<div style='display:block; background:#fbfab4; width:800px; text-align: center;'>&nbsp;&nbsp;Article&nbsp;<span style='color:#016b22;'>".$title."</span>&nbsp;successfully uploaded</div>";			
			if ($type == "article"){
            header('location:../app/add_article_view.php');
            }else if ($type == "publication"){
            header('location:../app/add_publication_view.php');
            }
		}else{
			//echo 'no';
			$_SESSION['upload'] = "<span style='color:#fb000c;'>There was an error uploading the file, please try again!!</span><br />";
				
                if ($type == "article"){
            header('location:../app/add_article_view.php');
            }else if ($type == "publication"){
            header('location:../app/add_publication_view.php');
            }
			} 
		}else{
			$_SESSION['upload'] = "<span style='color:#fb000c;'>ERROR: Only PDF file format allowed!!</span><br />";
if ($type == "article"){
            header('location:../app/add_article_view.php');
            }else if ($type == "publication"){
            header('location:../app/add_publication_view.php');
        }
		}
		
		}
	}

	
		
	
	?>
