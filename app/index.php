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
<title>CAR BOOKER</title>
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
		$("#index_cars_list").hide();
		$("#staff_left").hide();
		$("#staff_right").hide();
		$("#booking_close").hide();		
		
	
		/*user cars_list dropdown*/
		$(function cars_display(){
			$("#cars_list").click(function(){
				$("#options_blinder").css("left", "-20");
				$("#options_blinder").css("z-index", "549");
				$("#options_blinder").css("width","120%");
				$("#options_blinder").css("height", "550");
				$("#options_blinder").css("top","-30");
				$("#options_blinder").css("opacity", "0.7");
				$("#options_blinder").show();
				$("#index_cars_list").show();
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

			$('#car_close').click(function(){
				$("#options_blinder").css("z-index", "50");
				$("#options_blinder").show();
				$("#menu_cars_list").show("linear");
				$("#menu_cars").css("z-index", "51");
				$("#index_cars_list").hide();
				$("#menu_cars").click(function(){
					$("#options_blinder").hide();
					$("#menu_cars_list").hide();
					$("#menu_cars").css("z-index", "48");
					$("#menu_cars_list").stop(true);
					index_list();
				});	
			});

			$('#booking_close').click(function(){
				$("#options_blinder").css("z-index", "50");
				$("#options_blinder").show();
				$("#menu_booking_list").show("linear");
				$("#menu_booking").css("z-index", "51");
				$("#staff_left").hide();
				$("#staff_right").hide();
				$('#booking_close').hide();
				$("#menu_booking").click(function(){
					$("#options_blinder").hide();
					$("#menu_booking_list").hide();
					$("#menu_booking").css("z-index", "48");
					$("#menu_booking_list").stop(true);
					index_list();
				});	
			});
		});
		/*----      ////       ----*/
		$("#staff_booking").click(function(){
			$("#options_blinder").css("left", "-20");
			$("#options_blinder").css("z-index", "549");
			$("#options_blinder").css("width","120%");
			$("#options_blinder").css("height", "550");
			$("#options_blinder").css("top","-30");
			$("#options_blinder").css("opacity", "0.7");
			$("#options_blinder").show();
			$("#staff_left").show();
			$("#booking_close").show();
		});
		
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
#index_cars_list{
	z-index:600;
	top:50;
	padding-left:10;
	position:absolute;
        display:block;
        width:980;
	height:400;
	border:1px dotted #000;
	background:#fff;
	border-radius:10px;
	overflow:auto;
	}
#staff_left{
	padding:0;
	z-index:600;
	top:50;
	padding-left:10;
	position:absolute;
        display:block;
        width:450;
	height:424;
	border:1px dotted #000;
	background:#f2f1f0;
	border-radius:10px;
	overflow:hidden;
	}
#staff_right{
	z-index:600;
	top:50;
	left:500;
	padding:10;
	position:absolute;
        display:block;
        width:480;
	height:405;
	border:1px dotted #000;
	background:#fff;
	border-radius:10px;
	overflow:auto;
	}
#staff_right #box{
	margin-top:20;
	padding:5;
	background: #F9F8FE;
	border:1px dotted #0F0941;
	display:block;
	width:97%;
	font:17px/1 “helvetica neue”, helvetica, arial, sans-serif;
	}
#car_close a{
	position:absolute;
	top:370;
	left:880;
	display:block;
	background-color: #fff;
	border: 1px solid #3f4fd2;
	border-radius: 5px;
	padding: 3px 35px 3px 35px;
    	text-decoration: none;
    	color: #3f4fd2;
    	font:13px Comic Sans MS, "cursive";
    	text-align: center;
	}
#car_close a:active{border: 2px solid #3f4fd2;}
#booking_close{
	position:absolute;
	top:440;
	left:340;
	z-index:700;
	}
#booking_close a{
	position:relative;
	display:block;
	background-color: #fff;
	border: 1px solid #3f4fd2;
	border-radius: 5px;
	padding: 3px 35px 3px 35px;
    	text-decoration: none;
    	color: #3f4fd2;
    	font:13px Comic Sans MS, "cursive";
    	text-align: center;
	}
#booking_close a:active{border: 2px solid #3f4fd2;}
#staff_left ol{
	position:relative;
	display:block;
	height:auto;
	width:100%;
	counter-reset: li;
	list-style: none;
	*list-style: decimal;
	font: 14px "Trebuchet MS", Arial, Helvetica, sans-serif;
	padding: 0;
	margin-bottom: 4em;
	}
#staff_left ol ol{
	margin: 0 0 0 2em;
	}
#staff_left ol li{
	display:block;
	height:20;
	margin-top:20;
	}
.list-deco a{
	width:375;
	position: relative;
	height:20;
	display: block;
	padding: .4em .4em .4em .8em;
	*padding: .4em;
	margin: .5em 0 .5em 2.5em;
	background: #ddd;
	color: #444;
	text-decoration: none;
	transition: all .3s ease-out;		
	}
.list-deco a:hover{
	background: #eee;
	}
.list-deco a:before{
	content: counter(li);
	counter-increment: li;
	position: absolute;
	left: -2.5em;
	top: 50%;
	margin-top: -1em;
	background: #87ceeb;
	height: 2em;
	width: 2em;
	line-height: 2em;
	text-align: center;
	font-weight: bold;
	}
.list-deco a:after{
	position: absolute;
	content: '';
	border: .5em solid transparent;
	left: -1em;
	top: 50%;
	margin-top: -.5em;
	transition: all .3s ease-out;
	}
.list-deco a:hover:after{
	left: -.5em;
	border-left-color: #87ceeb;
	}
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
<div id="booking_close"><a href="#" >finish</a></div>
<div id="staff_left">
<?php require('bookings_moi.php'); ?>
</div>
<div id="staff_right">
</div>
<div id='index_cars_list'>
<?php require('cars_list.php'); ?>
<span id="car_close"><a href="#" >finish</a></span>
</div>
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
<?php
if ($_SESSION['privileges'] == "admin"){
?>
<span><a href="add_car_view.php">create a car</a></span>
<span id="blank">&nbsp;</span>
<?php
}
?>
<span><a id="cars_list" href="#">cars list</a></span>
</div>
<!-- booking popup -->
<div id="menu_booking_list">
<?php
if ($_SESSION['privileges'] != "driver"){
?>
<span><a href="add_booking_view.php">book a car</a></span>
<?php }else{ ?>
<span><a id="staff_booking" href="#">assigned bookings</a></span>
<?php 
}
if ($_SESSION['privileges'] == "admin"){
?>
<span id="blank">&nbsp;</span>
<span><a id="staff_booking" href="#">bookings list</a></span>
<?php }else if($_SESSION['privileges'] == "staff"){ ?>
<span id="blank">&nbsp;</span>
<span><a id="staff_booking" href="#">my bookings</a></span>
<?php } ?>
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
<span><a href="#" id="menu_users"><img src="../image/user_icon.png" alt='User cars_list' /></a></span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</div>
<div id="notifier">
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
