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
<title>SB ~ new car</title>
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
#left-panel form label span{display:inline-block;}
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
    <li><a href="#">&nbsp;</a>
	
    </li>
    <li><a href="#">&nbsp;</a>
       
    </li>
    <li><a href="#">&nbsp;</a>
	
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
      <h2>new car</h2>
    <form enctype="multipart/form-data" action="../scripts/add_car.php" method="post" style="width:100%">
    <fieldset>
    <?php
                      	if(isset($_SESSION['success'])){
							echo $_SESSION['success'].'<br />';
							unset($_SESSION['success']);
							}
					  ?>
    <label>Manufacturer (make):&nbsp;<?php if(isset($_SESSION['make'])){
							echo $_SESSION['make'];
							unset($_SESSION['make']);
							} ?></label>
    <input style="width:400" type="text" name="make" value="<?php echo $_SESSION['value_make']; unset($_SESSION['value_make']); ?>" />
    <label>Model:&nbsp;<?php if(isset($_SESSION['model'])){
							echo $_SESSION['model'];
							unset($_SESSION['model']);
							} ?></label>
    <input style="width:400"type="text" name="model" value="<?php echo $_SESSION['value_model']; unset($_SESSION['value_model']); ?>" />
    <label>Vehicle ownership:&nbsp;
    <?php if(isset($_SESSION['ownership'])){
							echo $_SESSION['ownership'];
							unset($_SESSION['ownership']);
							} ?>
    </label>
    <select name="ownership" style="width:200;" >
    <option value=''>choose car owner</option>
    <option value="bank_owned">Bank owned</option>
    <option value="taxi">Taxi</option>
    </select>
    <br />
    <label>Type:&nbsp;
    <?php if(isset($_SESSION['type'])){
							echo $_SESSION['type'];
							unset($_SESSION['type']);

							} ?>
    </label>
    <select name="type" style="width:200;" >
    <option value=''>select car type</option>
    <option value="SUV">SUV</option>
    <option value="sedan">Sedan</option>
    <option value="hatchback">Hatchback</option>
    <option value="coupe">Coupe</option>
    <option value="convertible">Convertible</option>
    <option value="van">Van</option>
    <option value="mini_van">Mini Van</option>
    <option value="wagon">Wagon</option>
    <option value="truck">Truck</option>
    <option value="pickup">Pickup</option>
    <option value="mini_bus">Mini Bus</option>
    <option value="bus">Bus</option>
    <option value="machinery">Machinery</option>
    </select>
    <br />
    <label>year:&nbsp;
    <?php if(isset($_SESSION['year'])){
							echo $_SESSION['year'];
							unset($_SESSION['year']);
							} ?>
    </label>
    <select name="year" style="width:200;" >
    <option value=''>select year manufactured</option>
    <?php 
     $current_year = date('Y') + 1;
     for ($i=$current_year;$i>=1990;$i--){
	echo '<option value="'.$i.'">'.$i.'</option>';
	}
    ?>
    </select>
    <br />
    <label>Registration number:&nbsp;<?php if(isset($_SESSION['reg'])){
							echo $_SESSION['reg'];
							unset($_SESSION['reg']);
							} ?></label>
    <input style="width:200"type="text" name="reg" value="<?php echo $_SESSION['value_reg']; unset($_SESSION['value_reg']); ?>" />
    <input type="hidden" name="current_user" value="<?php echo $_SESSION['id']; ?>" />
    <br />
    <input type="submit" name="submit" value="add" class="more_button" style="display:inline-block"/>
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
<?php } ?>
