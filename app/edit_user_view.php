<?php session_start(); 
if(isset($_SESSION['username'])&&isset($_SESSION['privileges'])){
require('../scripts/defaults.php');
$username = $_SESSION['username'];
$staff_id = $_SESSION['id'];

$connect = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die('cant connect to mysql: '.mysql_error());
$db = mysql_select_db(DB_NAME, $connect) or die('cant select database: '.mysql_error());
	
$q="SELECT * FROM `staff` WHERE `staff_id` = '$staff_id' ";
$r=mysql_query($q,$connect);
$s=mysql_fetch_array($r);
?>
<!DOCTYPE html">
<!--[if lt IE 7 ]> <html class="ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>BICO MALAWI</title>
<link rel="icon" href="../image/bico_icon.ico" type="image/x-icon" />
<link href="../css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="../css/layout.css" type="text/css" media="screen" charset="utf-8" />
<link rel="stylesheet" href="../css/jd.gallery.css" type="text/css" media="screen" charset="utf-8" />   
<link rel="stylesheet" href="../css/example.css">
<link rel="stylesheet" href="../css/font-awesome.min.css">
<script src="../js/jquery-1.10.2.js" type="text/javascript" ></script>      
<script>
	$(document).ready(function($){
		$("#options_blinder").hide();
		$("#send").click(function(){
			$('#valPassword').html("");
			$('#valPasswd').html("");
			$('input#passwd').css("box-shadow", "none");
			$('input#password').css("box-shadow", "none");
			var newPass = $('input#passwd').val();
			var confirmPass = $('input#password').val();

			if (newPass == ""){
				$('input#passwd').css("box-shadow", "0 0 8px #9d0824");
				$('#valPasswd').html("Please enter new password");
				return false;
			}

			if (newPass != confirmPass){
				$('input#passwd').css("box-shadow", "0 0 8px #9d0824");
				$('input#password').css("box-shadow", "0 0 8px #9d0824");
				$('#valPassword').html("Make sure new and confirmed password match");
				return false;
			}
		});
	});
</script>
</head>
<style>
/*#right-panel a{color:#145b80;}*/
#main_content{overflow:hidden;height:500px;}
#left-panel{position:relative;display:inline-block;width:965;}
#logo{
	margin:0;
	padding:0;
	position:absolute;
	left:100px;
	top:-23px;
    }
#logo img{width:100;height:100;}
#header_name{
	top:0px;
	margin:0;
	padding:0;
	position:absolute;
	left:235px;
	width:700px;
	}
#main_menu{top:108}
#main_body{top:15}
#main_footer{
	top:20;
	margin:0 auto;
	width:1024;
	height:20;
	overflow:hidden;
	}
form input[type="password"]{width:300;}
</style>
<body>

<div id="main_menu">
<div class="cssMenu">
<ul>
    <li id="plus">&nbsp;</li>	 
	<li><a href="#">Cars</a>
	<ul>
	    <li><a href="add_project_view.php">create a car</a></li>
	    <li><a href="show_project_view.php">cars list</a></li>
	</ul>
	</li> 
    <li><a href="#">Booking</a>
	<ul>
	    <li><a href="add_booking_view.php">book a car</a></li>
	    <li><a href="show_booking_view.php">bookings list</a></li>
	</ul>
    </li>
    <li><a href="#">Users</a>
	<!-- <ul>
	    <li><a href="add_user_view.php">upload user</a></li>
	    <li><a href="add_publication_view.php">upload publication</a></li>
	    <li><a href="show_users_view.php">users list</a></li>
	    <li><a href="show_publication_view.php">publications list</a></li>
	</ul> -->
    </li>
    <li><a href="#">Resources</a>
	<ul>
	    <li><a href="add_resource_view.php">upload resource</a></li>
	    <li><a href="show_resource_view.php">resources list</a></li>
	</ul>
    </li>
    <li><a href="#">Vacancies</a>
       <ul>
	    <li><a href="add_vacancy_view.php">add vacancy</a></li>
	    <li><a href="show_vacancy_view.php">vacancies list</a></li>
	</ul>
    </li>
    <li><a href="#">Reports</a>
	<ul>
	    <li><a href="add_report_view.php">upload report</a></li>
	    <li><a href="show_report_view.php">reports list</a></li>
	</ul>
    </li>	
    <li id="minus" style="width:203px">&nbsp;</li>
</ul>
</div>
</div>
<div id="content">
<div id="main_header">
<div id="logo">
	  <a id="logo_link" href="../app/"><img src="../image/standard_bank.png" alt="Standard Bank" ></a>
	  </div>
<div id="header_name">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>CAR BOOKING</span>
</div>
</div>
<div id="main_body">
<div id="main_content">
<div id="container1"> 
<div id="left-panel">
<div id="options_blinder"></div>
      <h2>welcome&nbsp;<span style="color:green;font-size:18;"><?php echo $s['firstname'].'&nbsp;'.$s['surname']; ?></span>&nbsp;edit your login details below</h2>
     <form action="../scripts/edit_user.script.php" method="post" style="width:100%">
     <fieldset>
     <?php if(isset($_SESSION['user_added'])){
							echo $_SESSION['user_added'];
							unset($_SESSION['user_added']);
							} ?>
    </label>
    <label>New Password:&nbsp;<span id="valPasswd" style='color:#d85303; line-height:18px;'></span>
    <?php if(isset($_SESSION['passwd'])){
							echo $_SESSION['passwd'];
							unset($_SESSION['passwd']);
							} ?>
    </label>
    <input type="password" name="passwd" id="passwd" />
    <label>Confirm New Password:&nbsp;<span id="valPassword" style='color:#d85303; line-height:18px;'></span>
    <?php if(isset($_SESSION['password'])){
							echo $_SESSION['password'];
							unset($_SESSION['password']);
							} ?>
    </label>
    <input type="password" name="password" id="password" />
    <br />
    <input id="send" type="submit" name="submit" value="edit" class="more_button" style="display:inline-block"/>
    </fieldset>
    </form>
</div>
</div>
</div>

</div>
</div>
</div>
<div id="main_footer">
<div id="footer-holder">   
<span id="footer-left">
		<a target="_blank" href="http://www.google.com/+MwaiMtingwi" style="margin-left:10;">prowess apps</a>   
</span>
<span id="footer-mid">
	
</span>
<span id="footer-right">
		  <p>&copy Standard Bank <?php echo date('Y'); ?>. All rights reserved</p>		  
</span>
</div>
</div>
</body>
</html>
<?php
}else{
header('location:../app/login.php');
}
?>
