<?php session_start(); 
	if(isset($_SESSION['username'])&&isset($_SESSION['section'])&&isset($_SESSION['privileges'])){
$username = $_SESSION['username'];
require('defaults.php');
//database connection 
 $connect = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die('cant connect to mysql: '.mysql_error());
$db = mysql_select_db(DB_NAME, $connect) or die('cant select database: '.mysql_error());
 

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
	<title>St. Kaggwa Parish|<?php echo $_SESSION['username']; ?></title>
	<meta http-equiv="Content-Type" content="text/html;CHARSET=utf-8">
	<link rel="stylesheet" type="text/css" href="../css/main_style.css" media="all">
	<link rel="stylesheet" type="text/css" href="../css/gallery.css" />
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/jquery-1.2.6.min.js"></script>
	<script type="text/javascript" src="../js/jquery-easing-1.3.pack.js"></script>
	<script type="text/javascript" src="../js/jquery-easing-compatibility.1.2.pack.js"></script>
	<script type="text/javascript" src="../js/coda-slider.1.1.1.pack.js"></script>
	<script type="text/javascript" src="../js/easySlider1.5.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){	
			$("#slider").easySlider();
			});	
	</script>
	<script type="text/javascript">
	
		var theInt = null;
		var $crosslink, $navthumb;
		var curclicked = 0;
		
		theInterval = function(cur){
			clearInterval(theInt);
			
			if( typeof cur != 'undefined' )
				curclicked = cur;
			
			$crosslink.removeClass("active-thumb");
			$navthumb.eq(curclicked).parent().addClass("active-thumb");
				$(".stripNav ul li a").eq(curclicked).trigger('click');
			
			theInt = setInterval(function(){
				$crosslink.removeClass("active-thumb");
				$navthumb.eq(curclicked).parent().addClass("active-thumb");
				$(".stripNav ul li a").eq(curclicked).trigger('click');
				curclicked++;
				if( 6 == curclicked )
					curclicked = 0;
				
			}, 3000);
		};
		
		$(function(){
			
			$("#main-photo-slider").codaSlider();
			
			$navthumb = $(".nav-thumb");
			$crosslink = $(".cross-link");
			
			$navthumb
			.click(function() {
				var $this = $(this);
				theInterval($this.parent().attr('href').slice(1) - 1);
				return false;
			});
			
			theInterval();
		});
	</script>
	</head>

	<body topmargin="0" leftmargin="0" marginheight="0" marginwidth="0">
    <div class="box3"> <span class="text12">&nbsp;</span></div>
    <div class="box4"><img src="../image/kaggwa_main_banner.png" alt="" width="100%" height=
    "215" border="0" id="headerplus1797" ></div>
    <div class="box6">
      <div class="para2"> <span class="text10">P.O. Box 2310 </span> </div>
      <div class="para2"> <span class="text10">Along Kaunda Road </span> </div>
      <div class="para2"> <span class="text10">Area 49 </span> </div>
      <div class="para2"> <span class="text10">Lilongwe 3 </span> </div>
      <div class="para2"> <span class="text10"><br>
        </span> </div>
      <div class="para2"> <span class="text10">Tel: 01 716 053 </span> </div>
      <div class="para2"> <span class="text10">Mobile: </span> </div>
      <div class="para2"> <span class="text10">e-mail: </span> </div>
    </div>
    <div class="box8">
      <div class="pNormal"> <a href="../index.php" style="text-decoration:none;"><span class="text9">Welcome &nbsp;to&nbsp;&nbsp;</span><span class="text2">St. Andrea Kaggwa</span><span 
        class="text1"><br>
      </span></a> </div>
      <div class="pNormal"> <a href="../index.php" style="text-decoration:none;"><span class="text0">&nbsp; &nbsp; </span><span class="text9">P &nbsp; &nbsp; &nbsp; a &nbsp; &nbsp; &nbsp; r &nbsp; &nbsp; &nbsp; i &nbsp; &nbsp; &nbsp; s &nbsp; &nbsp; &nbsp; h </span></a> </div>
    </div>
    <div class="box9"> &nbsp;</div>
    <div class="box15">
      <div >
        <ul id="cssMenu">
          <li><a href="../index.php">HOME</a></li>
          <li><a href="../council.php"><span>COUNCIL &amp; COMMISSION</span></a>
            <ul>
              <li><a href="#">Parish Council</a></li>
              <li><a href="#">Finance</a></li>
            </ul>
          </li>
          <li><a href="../sacraments.php"><span>SACRAMENTS</span></a>
            <ul>
              <li><a href="../baptism.php">Baptism</a></li>
              <li><a href="../eucharist.php">Eucharist</a></li>
              <li><a href="../reconciliation.php">Reconciliation</a></li>
              <li><a href="../confirmation.php">Confirmation</a></li>
              <li><a href="../marriage.php">Marriage</a></li>
              <li><a href="../holy_orders.php">Holy Orders</a></li>
              <li><a href="../annointing.php">Annointing of the Sick</a></li>
            </ul>
          </li>
          <li><a href="../parish.php"><span>PARISH COMMUNICATION</span></a>
            <ul>
              <li><a href="../fullcalendar/demos/calendar.php">Calendar</a></li>
            </ul>
          </li>
          <li><a href="../events.php">EVENTS</a></li>
          <li style="border-right:0px;"><a href="../about_us.php">ABOUT US</a></li>
        </ul>
      </div>
    </div>
    <div class="box16"> <span class="text12">&nbsp;</span></div>
    <div class="box17">
      <div id="footer"> <a href="../index.php">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="../council.php">Council &amp; Commission</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="../sacraments.php">Sacraments</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="../parish.php">Parish Communication</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="../events.php">Events</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="../about_us.php">About us</a> <br />
        <span style="color:#CCC; font-size:13px;">&copy <?php echo date(Y);?> St. Andrea Kaggwa Parish, Lilongwe Arch-Diocese</span><br />
        Custom Website Design <span style="color:#CCC; font-size:13px;">by</span> Mwai Mtingwi </div>
    </div>
    <div class="barContainer" style="padding-left:1.33%;">
      <div id="sidebar">
        <ul>
          <li><a href="../st_kaggwa.php">Patron Saint</a></li>
          <li><a href="../priest.php">Parish Priest</a></li>
          <li><a href="../wisdom_centre/index.php">Wisdom Centre Pvt</a></li>
          <li><a href="../bulletin.php">Bulletin</a></li>
          <li><a href="../outstations.php">Outstations</a></li>
          <li><a href="../gallery.php">Photo Gallery</a></li>
          <li><a href="../about_us.php">Contact us</a></li>
          <li><a href="http://www.usccb.org/bible/readings/index.cfm">Daily Bible Reading</a></li>
          <li><a href="../fullcalendar/demos/calendar.php">Church Calendar</a></li>
        </ul>
      </div>
    </div>
    <div id="container">
      <div id="slider">
        <ul>
          <li><img src="../image/sidebarGallery/01.jpg" alt="" /></li>
          <li><img src="../image/sidebarGallery/02.jpg" alt="" /></li>
          <li><img src="../image/sidebarGallery/03.jpg" alt="" /></li>
          <li><img src="../image/sidebarGallery/04.jpg" alt="" /></li>
          <li><img src="../image/sidebarGallery/05.jpg" alt="" /></li>
        </ul>
      </div>
    </div>
    <div id="baptism">
      <?php
					$staff_id=$_GET['staff_id'];
					$login_id=$_GET['login_id'];
					$log_id=$_GET['log_id'];
					
                    $q="SELECT * FROM `staff` WHERE `staff_id`='$staff_id'";
					$r=mysql_query($q,$connect);
					$s=mysql_fetch_array($r);
					
					$t="SELECT * FROM `login` WHERE `id`='$login_id'";
					$u=mysql_query($t,$connect);
					$v=mysql_fetch_array($u);
					
					$w="SELECT * FROM `user_log` WHERE `log_id`='$log_id'";
					$x=mysql_query($w,$connect);
					$y=mysql_fetch_array($x);
					?>
      <a href="user_access.php" style="text-decoration:none; color:#435981;">Main menu</a><span style="color:#000000;">&nbsp;>>&nbsp;</span><span style="color:#ac9a01;"><?php echo $s['username']; ?></span> <span id="line">
      <p class='border' style="line-height:1px; height:1px; padding:0px; margin:6px;"><img src='image/blank.gif' alt='' width='1' height='1' /></p>
      </span>
      <h2>change <?php echo $s['username']; ?>'s password</h2>
      <form action="edit_user.script.php" method="post" style="width:100%">
        <label>First Name</label>
        :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <label style="display:inline-block; background:#e1e1e1; padding-left:2px;padding-right:2px; border:1px dotted #999999; margin-bottom:3px; color:#000000"><?php echo $s['firstname']; ?></label>
        <br />
        <label>Surname</label>
        :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <label style="display:inline-block; background:#e1e1e1; padding-left:2px;padding-right:2px; border:1px dotted #999999; margin-bottom:3px; color:#000000"><?php echo $s['surname']; ?></label>
        <br />
        <label>Enter New Password</label>
        :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="password" name="passwd" />
        <br />
        <?php if(isset($_SESSION['passwd'])){
							echo $_SESSION['passwd'];
							unset($_SESSION['passwd']);
							} ?>
        <label>Confirm New Password</label>
        :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="password" name="conf_passwd" />
        <br />
        <?php if(isset($_SESSION['conf_passwd'])){
							echo $_SESSION['conf_passwd'];
							unset($_SESSION['conf_passwd']);
							} ?>
        <label>Section</label>
        :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <label style="display:inline-block; background:#e1e1e1; padding-left:2px;padding-right:2px; border:1px dotted #999999; margin-bottom:3px; color:#000000"><?php echo $v['section']; ?></label>
        <br />
        <input type="hidden" name="login_id" value="<?php echo $login_id; ?>" />
        <input type="hidden" name="staff_id" value="<?php echo $staff_id; ?>" />
        <input type="hidden" name="log_id" value="<?php echo $log_id; ?>" />
        <input type="submit" name="submit" value="change" class="submit" style="width:100px;" />
      </form>
    </div>
</body>
</html>
<?php 
 }else{
	header('location:../index.php');
	}
 ?>