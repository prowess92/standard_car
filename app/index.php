<?php
session_start(); 
if (isset($_SESSION['username']) && !empty($_SESSION['username'])){
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
<title>cAR BOOKER</title>
<link rel="icon" href="../image/bico_icon.ico" type="image/x-icon" />
<link href="../css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="../css/layout.css" type="text/css" media="screen" charset="utf-8" />
<link rel="stylesheet" href="../css/jd.gallery.css" type="text/css" media="screen" charset="utf-8" />   
<link rel="stylesheet" href="../css/example.css">
<link rel="stylesheet" href="../css/font-awesome.min.css">
<script src="../js/jquery-1.10.2.js" type="text/javascript" ></script>      
<script type="text/javascript">
     $(document).ready(function($){
		$("#options_blinder").hide();
		$("#menu_cars_list").hide();
		$("#menu_booking_list").hide();
		$("#menu_users_list").hide();
		$("#menu_resources_list").hide();
		$("#menu_vacancies_list").hide();
		$("#menu_reports_list").hide();
		$("#user_options").hide();
		
		/*user management dropdown*/
		$(function user_display(){
			$("#management").click(function(){
				$("#options_blinder").css("left", "-20");
				$("#options_blinder").css("z-index", "549");
				$("#options_blinder").css("width","120%");
				$("#options_blinder").css("height", "550");
				$("#options_blinder").css("top","-30");
				$("#options_blinder").css("opacity", "0.3");
				$("#options_blinder").show();
				$("#user_options").show("slow", "swing");

				$("#management").click(function(){
					$("#options_blinder").css("z-index", "50");
					$("#options_blinder").css("left", "0");
					$("#options_blinder").css("width","100%");
					$("#options_blinder").css("height", "400");
					$("#options_blinder").css("top", "75");
					$("#options_blinder").css("opacity","0.5");
					$("#options_blinder").hide();
					$("#user_options").hide();
					$("#user_options").stop(true);
					user_display();
				});
			});
		});
		/*----       ////     ----*/

		/*---- main page effect ----*/
		$(function index_list(){
			/*cars menu effects*/
			$("#menu_cars").click(function(){
				$("#options_blinder").show();
				$("#menu_cars_list").show("linear");
				$("#menu_cars").css("z-index", "51");
				$("#menu_cars").click(function(){
					$("#options_blinder").hide();
					$("#menu_cars_list").hide();
					$("#menu_cars").css("z-index", "48");
					$("#menu_cars_list").stop(true);
					index_list();
				});
			});
			/*booking menu effects*/
			$("#menu_booking").click(function(){
				$("#options_blinder").show();
				$("#menu_booking_list").show("linear");
				$("#menu_booking").css("z-index", "51");
				$("#menu_booking").click(function(){
					$("#options_blinder").hide();
					$("#menu_booking_list").hide();
					$("#menu_booking").css("z-index", "48");
					$("#menu_booking_list").stop(true);
					index_list();
				});
			});
			/*users menu effects*/
			$("#menu_users").click(function(){
				$("#options_blinder").show();
				$("#menu_users_list").show("linear");
				$("#menu_users").css("z-index", "51");
				$("#menu_users").click(function(){
					$("#options_blinder").hide();
					$("#menu_users_list").hide();
					$("#menu_users").css("z-index", "48");
					$("#menu_users_list").stop(true);
					index_list();
				});
			});
			/*resources menu effects*/
			$("#menu_resources").click(function(){
				$("#options_blinder").show();
				$("#menu_resources_list").show("linear");
				$("#menu_resources").css("z-index", "51");
				$("#menu_resources").click(function(){
					$("#options_blinder").hide();
					$("#menu_resources_list").hide();
					$("#menu_resources").css("z-index", "48");
					$("#menu_resources_list").stop(true);
					index_list();
				});
			});
			/*vacancies menu effects*/
			$("#menu_vacancies").click(function(){
				$("#options_blinder").show();
				$("#menu_vacancies_list").show("linear");
				$("#menu_vacancies").css("z-index", "51");
				$("#menu_vacancies").click(function(){
					$("#options_blinder").hide();
					$("#menu_vacancies_list").hide();
					$("#menu_vacancies").css("z-index", "48");
					$("#menu_vacancies_list").stop(true);
					index_list();
				});
			});
			/*reports menu effects*/
			$("#menu_reports").click(function(){
				$("#options_blinder").show();
				$("#menu_reports_list").show("linear");
				$("#menu_reports").css("z-index", "51");
				$("#menu_reports").click(function(){
					$("#options_blinder").hide();
					$("#menu_reports_list").hide();
					$("#menu_reports").css("z-index", "48");
					$("#menu_reports_list").stop(true);
					index_list();
				});
			});
		});
		/*----      ////       ----*/
  	});
</script>
</head>
<style>
/*#right-panel a{color:#145b80;}*/
#main_content{overflow:hidden;height:500px;}
#left-panel{position:relative;display:inline-block;width:780;}
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
#main_header{top:30;}
#top-header{top:55;z-index:500;}
</style>
<body>

<div id="main_menu">
<div class="cssMenu" style="visibility:hidden;">
<ul>
    <li id="plus">&nbsp;</li>		 
    <li id="plus" style="border-radius:0;width:610;border:none;margin-left:-5;">&nbsp;</li>	
    <li id="minus" style="width:258px;margin-left:-5;">&nbsp;</li>
</ul>
</div>
</div>
<div id="content">
<div id="main_header">
<div id="top-header">
<span><a href="../scripts/logout.php" style="color:red;">logout</a></span>
</div>
<div id="user_options">
<ul>
<?php
if ($_SESSION['privileges'] == "admin"){
	echo '<li><a href="add_user_view.php">Add new user</a></li>';
	}
?>
<li><a href="edit_user_view.php">Edit login details</a></li>
</ul>
</div>
<div id="logo">
	  <a id="logo_link" href="../app/"><img src="../image/standard_bank.png" alt="Standard Bank" ></a>
	  </div>
<div id="header_name">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>CAR BOOKING</span>
</div>
</div>
<div id="main_body">
<div id="main_content">
<div id="container1"> 
<div id="left-panel" style="width:990;">
<?php
if (isset($_SESSION['user_added'])){
    echo $_SESSION['user_added'];
    unset($_SESSION['user_added']);
}else{
    echo '<h2>Welcome&nbsp;&nbsp;&nbsp;<span style="color:green;">'.$_SESSION['name'].'</h2>';
}
?>
<p>&nbsp;</p>
<!-- cars popup -->
<div id="menu_cars_list">
<span><a href="add_car_view.php">create a car</a></span>
<span id="blank">&nbsp;</span>
<span><a href="show_car_view.php">cars list</a></span>
</div>
<!-- booking popup -->
<div id="menu_booking_list">
<span><a href="add_booking_view.php">book a car</a></span>
<span id="blank">&nbsp;</span>
<span><a href="show_booking_view.php">bookings list</a></span>
</div>
<!-- users popup -->
<div id="menu_users_list">
<?php
if ($_SESSION['privileges'] == "admin"){
?>
<span><a href="add_user_view.php">create user</a></span>
<span id="blank">&nbsp;</span>
<span><a href="show_users_view.php">users list</a></span>
<span id="blank">&nbsp;</span>
<?php } ?>
<span><a href="edit_user_view.php">change login details</a></span>
</div>
<!-- resources popup -->
<div id="menu_resources_list">
<span><a href="add_resource_view.php">upload resource</a></span>
<span id="blank">&nbsp;</span>
<span><a href="show_resource_view.php">resources list</a></span>
</div>
<!-- vacancies popup -->
<div id="menu_vacancies_list">
<span><a href="add_vacancy_view.php">add vacancy</a></span>
<span id="blank">&nbsp;</span>
<span><a href="show_vacancy_view.php">vacancies list</a></span>
</div>
<!-- reports popup -->
<div id="menu_reports_list">
<span><a href="add_report_view.php">upload report</a></span>
<span id="blank">&nbsp;</span>
<span><a href="show_report_view.php">reports list</a></span>
</div>
<!-- /// /// /// // -->
<div id="options_blinder"></div>
<div id="options">
<span><a href="#" id="menu_cars"><img src="../image/car_icon.png" alt='Cars' /></a></span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span><a href="#" id="menu_booking"><img src="../image/booking_icon.png" alt='Bookings' /></a></span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span><a href="#" id="menu_users"><img src="../image/user_icon.png" alt='User Management' /></a></span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span><a href="#" id="menu_resources">Resources</a></span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span><a href="#" id="menu_vacancies">Vacancies</a></span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span><a href="#" id="menu_reports">Reports</a></span>
</div>
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
