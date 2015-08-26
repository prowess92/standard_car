<?php session_start(); 
if(isset($_SESSION['username'])&&isset($_SESSION['privileges'])){
$username = $_SESSION['username'];
	require('../scripts/defaults.php');
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
<title>SB ~ book a car</title>
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
$('#loc_desc').hide();
$('#avail_cars').hide();
$('input#book').hide();
$('#region').click(function(){
        var region = $("select#region").val();

	$.ajax({ 
  	type: 'GET', 
  	url: '../app/district.php', 
  	data: "region=" + region, 
 	success: function(data){
		$('#district').html('').load('../app/district.php?region=' + region);}
	}); 
	return false;
  });
$('#end_year').click(function(){
	$('#avail_cars').show();

	var day   = $("select#start_day").val();
	var month = $("select#start_month").val();
	var year = $("select#start_year").val();

	$('#avail_cars_list').html('').load('../app/avial_car.php?day=' + day + '&month=' + month + '&year=' + year);

	});
});
</script>
</head>
<style>
/*#right-panel a{color:#145b80;}*/
#main_content{height:500px;overflow:auto;}
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
#left-panel form{overflow:automatic;}
#left-panel form label span{display:inline-block;}
#left-panel form{padding:10;margin:0;}
#avail_cars{
  	left:480;
	padding-left:10;
	position:absolute;
        display:block;
        width:500;
	height:480;
	border:1px dotted #000;
	}
</style>
<body>

<div id="main_menu">
<div class="cssMenu">
<ul>
    <li id="plus">&nbsp;</li>	 
    <li><a href="#">Cars</a>
	<ul>
	    <li><a href="add_car_view.php">create a car</a></li>
	    <li><a href="show_car_view.php">cars list</a></li>
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
    <li id="minus" style="width:261px">&nbsp;</li>
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
<div id='avail_cars'>
<h2>Available vehicles</h2>
<div id='avail_cars_list'></div>
</div>
<div style="width:45%;border:1px dotted #000;height:480;overflow:auto;display:block;">
    <form enctype="multipart/form-data" action="../scripts/add_booking.php" method="post">
    <?php
                      	if(isset($_SESSION['success'])){
							echo $_SESSION['success'].'<br />';
							unset($_SESSION['success']);
							}
					  ?>
    <label>Enter your name (first name and surname):&nbsp;<?php if(isset($_SESSION['full_name'])){
							echo $_SESSION['full_name'];
							unset($_SESSION['full_name']);
							} ?></label>
    <input style="width:400" type="text" name="full_name" value="<?php echo $_SESSION['value_full_name']; unset($_SESSION['value_full_name']); ?>" />
    <label>Enter your phone number:&nbsp;<?php if(isset($_SESSION['phone'])){
							echo $_SESSION['phone'];
							unset($_SESSION['phone']);
							} ?></label>
    <input style="width:400" type="text" name="phone" value="<?php echo $_SESSION['value_phone']; unset($_SESSION['value_phone']); ?>" />
    <label>Enter your email address:&nbsp;<?php if(isset($_SESSION['email'])){
							echo $_SESSION['email'];
							unset($_SESSION['email']);
							} ?></label>
    <input style="width:400" type="text" name="email" value="<?php echo $_SESSION['value_email']; unset($_SESSION['value_email']); ?>" />
    <label>Destination (select region then district):&nbsp;<?php if(isset($_SESSION['district'])){
							echo $_SESSION['district'];
							unset($_SESSION['district']);
							} ?></label>
    <select id="region" name="region">
    <option value=''>Region</option>
    <option value='2'>Northern</option>
    <option value='1'>Central</option>
    <option value='3'>Southern</option>
    </select>&nbsp;
    <span id="district" >
    <select>
    <option>District</option>
    </select>
    </span>
    <div id="loc_desc">
    <label>Exact Location Description (township/village):&nbsp;<?php if(isset($_SESSION['loc_desc'])){
							echo $_SESSION['loc_desc'];
							unset($_SESSION['loc_desc']);
							} ?></label>
    <textarea style="width:400;height:40;" name="loc_desc"></textarea>
    <label>Choose driver and Enter number of people travelling (figures only):&nbsp;<?php if(isset($_SESSION['driver'])){
							echo $_SESSION['driver'];
							unset($_SESSION['driver']);
							} ?></label>
    <select name="driver">
    <option value="">choose driver</option>
    <?php
	$connect = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die('cant connect to mysql: '.mysql_error());
        $db = mysql_select_db(DB_NAME, $connect) or die('cant select database: '.mysql_error());

	$d="SELECT * FROM `staff` WHERE `role` = 'driver'";
	$e=mysql_query($d,$connect);
	while($f=mysql_fetch_array($e)){
	echo '<option value="'.$f['staff_id'].'">'.$f['firstname'].'&nbsp;'.$f['surname'].'</option>';
        }
    ?>
    </select>&nbsp;&nbsp;
    <input style="width:250;display:inline-block" type="text" name="personnel" value="<?php echo $_SESSION['value_personnel']; unset($_SESSION['value_personnel']); ?>" placeholder="number of people travelling here..."  />
    
    <label>Requested Date of Use:&nbsp;<?php if(isset($_SESSION['date_use'])){
							echo $_SESSION['date_use'];
							unset($_SESSION['date_use']);
							} ?></label>
    <select id='start_day' name='start_day'>
    <option value=''>day</option>
    <?php
	for ($i=1;$i<=31;$i++){
	echo "<option value='".$i."'>".$i."</option>";
	}
    ?>
    </select>&nbsp;
    <select id='start_month' name='start_month'>
    <option value=''>month</option>
    <?php
	for ($i=1;$i<=12;$i++){
	echo "<option value='".$i."'>".$i."</option>";
	}
    ?>
    </select>
    &nbsp;
    <select id='start_year' name='start_year'>
    <option value=''>year</option>
    <?php
        $next_year = date('Y') + 1;
	for ($i=date('Y');$i<=$next_year;$i++){
	echo "<option value='".$i."'>".$i."</option>";
	}
    ?>
    </select>
    <label>Expected Return Date:&nbsp;<?php if(isset($_SESSION['date_return'])){
							echo $_SESSION['date_return'];
							unset($_SESSION['date_return']);
							} ?></label>
    <select name='end_day'>
    <option value=''>day</option>
    <?php
	for ($i=1;$i<=31;$i++){
	echo "<option value='".$i."'>".$i."</option>";
	}
    ?>
    </select>&nbsp;
    <select name='end_month'>
    <option value=''>month</option>
    <?php
	for ($i=1;$i<=12;$i++){
	echo "<option value='".$i."'>".$i."</option>";
	}
    ?>
    </select>
    &nbsp;
    <select id='end_year' name='end_year'>
    <option value=''>year</option>
    <?php
        $next_year = date('Y') + 1;
	for ($i=date('Y');$i<=$next_year;$i++){
	echo "<option value='".$i."'>".$i."</option>";
	}
    ?>
    </select>
    </div>
    <br />
    <span id='free_car'></span>
    <input type="hidden" name="current_user" value="<?php echo $_SESSION['id']; ?>" />
    <br />
    <input id="book" type="submit" name="submit" value="book" class="more_button" style="display:inline-block"/>
    </form> 
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
<?php } ?>
