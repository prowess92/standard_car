<?php
session_start(); 

	require('../scripts/defaults.php');
?>
      <ol class="list-deco">
      <?php
	$connect = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die('cant connect to mysql: '.mysql_error());
$db = mysql_select_db(DB_NAME, $connect) or die('cant select database: '.mysql_error());
	$current_user = $_SESSION['id'];
    
    $right_now = date("Y").'-'.date("m").'-'.date("d");
    $date = strtotime("+1 day", strtotime($right_now));
    $next_date =  date("Y-m-d", $date);
    
    if ($_SESSION['privileges'] == "staff"  || $_SESSION['privileges'] == "admin"){
	$q="SELECT * FROM `bookings` WHERE `created_by` = '$current_user' AND `date_use` = DATE('$next_date') ORDER BY `date_use` DESC ";
	}else if ($_SESSION['privileges'] == "driver"){
	$q="SELECT * FROM `bookings` WHERE `driver_id` = '$current_user'  AND `date_use` = DATE('$next_date') ORDER BY `date_use` DESC ";
	}
	$r=mysql_query($q,$connect);
	$trips_num = 0;
	while($s=mysql_fetch_array($r)){ 
		$district_id = $s['district_id'];
		$a="SELECT * FROM district WHERE `district_id` = '$district_id' ";
		$b=mysql_query($a,$connect);
		$c=mysql_fetch_array($b);
		echo "<li><a id='booking_".$s['booking_id']."' href='#'>You are going to ".$c['name']." at ".$s['loc_desc']." tomorrow</a></li>";          
?>
		<script>
		$(document).ready(function(){
			$('#booking_<?php echo $s["booking_id"]; ?>').click(function(){
			$('#staff_left').html('').load('trip_view.php?id=<?php echo $s['booking_id']; ?>');
			$('#staff_left').show();
			return false;
			});
		});
		</script>
<?php  		$trips_num++;
		
	}	 
 ?>
</ol>
<?php
	if ($trips_num == 0){
		echo '<p style="color:#000">no available notifications</p>';
		}
?>

