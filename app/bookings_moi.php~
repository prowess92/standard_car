<?php
session_start(); 

	require('../scripts/defaults.php');
?>
      <div id="staff_left" style="padding:0;height:384;border:0;overflow:auto;top:0;">
      <ol class="list-deco">
      <?php
	$connect = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die('cant connect to mysql: '.mysql_error());
$db = mysql_select_db(DB_NAME, $connect) or die('cant select database: '.mysql_error());
	$current_user = $_SESSION['id'];

	if ($_SESSION['privileges'] == "admin"){
	$q="SELECT * FROM `bookings` ORDER BY `date_use` DESC ";
	}else if ($_SESSION['privileges'] == "staff"){
	$q="SELECT * FROM `bookings` WHERE `created_by` = '$current_user' ORDER BY `date_use` DESC ";
	}else if ($_SESSION['privileges'] == "driver"){
	$q="SELECT * FROM `bookings` WHERE `driver_id` = '$current_user' ORDER BY `date_use` DESC ";
	}
	$r=mysql_query($q,$connect);
	while($s=mysql_fetch_array($r)){ 
		$district_id = $s['district_id'];
		$a="SELECT * FROM district WHERE `district_id` = '$district_id' ";
		$b=mysql_query($a,$connect);
		$c=mysql_fetch_array($b);
		echo "<li><a id='booking_".$s['booking_id']."' href='#'>Going to ".$c['name'].";&nbsp;".$s['loc_desc']."</a></li>";          
?>
		<script>
		$(document).ready(function(){
			$('#booking_<?php echo $s["booking_id"]; ?>').click(function(){
			$('#staff_right').html('').load('trip_view.php?id=<?php echo $s['booking_id']; ?>');
			$('#staff_right').show();
			return false;
			});
		});
		</script>
<?php  	
	}	 
 ?>
</ol>
</div>
