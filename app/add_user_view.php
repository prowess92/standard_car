<?php session_start(); 
if(isset($_SESSION['username'])&&isset($_SESSION['privileges'])){
$username = $_SESSION['username'];
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
<title>SB ~ new user</title>
<link rel="icon" href="../image/bico_icon.ico" type="image/x-icon" />
<link href="../css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="../css/layout.css" type="text/css" media="screen" charset="utf-8" />
<link rel="stylesheet" href="../css/jd.gallery.css" type="text/css" media="screen" charset="utf-8" />   
<link rel="stylesheet" href="../css/example.css">
<link rel="stylesheet" href="../css/font-awesome.min.css">
<script src="../js/jquery-1.10.2.js" type="text/javascript" ></script>      

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
form input[type="text"]{width:300;}
form input[type="password"]{width:300;}
</style>
<body>

<div id="main_menu">
<div class="cssMenu">
<ul>
    <li id="plus">&nbsp;</li>
	<li><a href="#">Cars</a>
	<ul>
	    <li><a href="add_car_view.php">add car</a></li>
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
   <li id="minus" style="width:567px">&nbsp;</li>
</ul>
</div>
</div>
<div id="content">
<div id="main_header">
<div id="logo">
	  <a id="logo_link" href="../app/"><img src="../image/standard_bank.png" alt="Standard Bank" width="140" height="90" border=""> </a>
	  </div>
<div id="header_name">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>CAR BOOKING</span>
</div></div>
<div id="main_body">
<div id="main_content">
<div id="container1"> 
<div id="left-panel">
    <h2>new user account</h2>
    <div style="width:100%;border:1px dotted #000;height:420;overflow:auto;display:block;padding:10;">
    <form action="../scripts/add_user.script.php" method="post" style="width:100%">
    <label>First Name:&nbsp;
    <?php if(isset($_SESSION['fname'])){
							echo $_SESSION['fname'];
							unset($_SESSION['fname']);
							} ?>
    </label>
    <input type="text" name="fname" />
    <label>Surname:&nbsp;
    <?php if(isset($_SESSION['sname'])){
							echo $_SESSION['sname'];
							unset($_SESSION['sname']);
							} ?>
    </label>
    <input type="text" name="sname" />
    <label>Phone number:&nbsp;<?php if(isset($_SESSION['phone'])){
							echo $_SESSION['phone'];
							unset($_SESSION['phone']);
							} ?></label>
    <input type="text" name="phone" value="<?php echo $_SESSION['value_phone']; unset($_SESSION['value_phone']); ?>" />
    <label>email address:&nbsp;<?php if(isset($_SESSION['email'])){
							echo $_SESSION['email'];
							unset($_SESSION['email']);
							} ?></label>
    <input type="text" name="email" value="<?php echo $_SESSION['value_email']; unset($_SESSION['value_email']); ?>" />
    <label>user role:&nbsp;
    <?php if(isset($_SESSION['role'])){
							echo $_SESSION['role'];
							unset($_SESSION['role']);
							} ?>
    </label>
    <select name="role" style="width:300;" >
    <option>click to select user role</option>
    <option value="admin">admin</option>
    <option value="driver">driver</option>
    <option value="staff">other</option>
    </select>

    <label>Password:&nbsp;
    <?php if(isset($_SESSION['passwd'])){
							echo $_SESSION['passwd'];
							unset($_SESSION['passwd']);
							} ?>
    </label>
    <input type="password" name="passwd" />
    <br />
    <input type="submit" name="submit" value="add user" class="more_button" style="display:inline-block"/>
    <input type="reset" name="reset" value="clear" class="more_button_clear" style="display:inline-block"/>
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
		  <p>&copy BICO <?php echo date('Y'); ?>. All rights reserved</p>		  
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
