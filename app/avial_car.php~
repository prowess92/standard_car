<ul>
<?php 
session_start(); 

	require('../scripts/defaults.php');
    $connect = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die('cant connect to mysql: '.mysql_error());
$db = mysql_select_db(DB_NAME, $connect) or die('cant select database: '.mysql_error());

	$d="SELECT * FROM `cars` WHERE `car_id` NOT IN (SELECT `car_id` FROM `bookings`) ORDER BY `make`";
	$e=mysql_query($d,$connect);
	while($f=mysql_fetch_array($e)){
        	echo "<li><a id='car".$f['car_id']."' href='#'>".$f['make']."&nbsp;".$f['model']."&nbsp;registration number&nbsp;".$f['reg_num']."</a></li>";
		$car_label = "<label>you selected&nbsp;".$f['make']."&nbsp;".$f['model']."&nbsp;registration number&nbsp;".$f['reg_num']."</label>";
		$select_car = '<input type="hidden" name="car_id" value="'.$f['car_id'].'" />';
		echo "<li id='blank'>&nbsp</li>\n";
?>
		<script>
		$(document).ready(function(){
			$('#car<?php echo $f["car_id"]; ?>').click(function(){
			$('#free_car').html('<?php echo $car_label."".$select_car; ?>');
			$('input#book').show();
			return false;
			});
		});
		</script>
<?php
		}
    
     $start_date = mktime('00', '00', '00', $_GET['month'], $_GET['day'], $_GET['year']);
     $start_date_final = date("Y-m-d H:i:s", $start_date);
     
	$q="SELECT * FROM cars a  INNER JOIN bookings b ON b.car_id = a.car_id WHERE b.status = 'pending' and b.date_return < TIMESTAMP('$start_date_final') ORDER BY a.make";
	$r=mysql_query($q,$connect);
    $query_length = mysql_num_rows($r);
    $counter = 0;
	while($s=mysql_fetch_array($r)){
            $cars[$counter] = $s['car_id'];
         $counter++;
        }
        $filtered = array_unique($cars);
        $total = count($filtered);
        for ($i=0;$i<$total;$i++){
            $q = "SELECT * FROM cars WHERE car_id = '$filtered[$i]'";
            $r = mysql_query($q, $connect);
            while($s=mysql_fetch_array($r)){
             echo "<li><a id='car".$s['car_id']."' href='#'>".$s['make']."&nbsp;".$s['model']."&nbsp;registration number&nbsp;".$s['reg_num']."</a></li>";
			$car_label = "<label>you selected&nbsp;".$s['make']."&nbsp;".$s['model']."&nbsp;registration number&nbsp;".$s['reg_num']."</label>";
			$select_car = '<input type="hidden" name="car_id" value="'.$s['car_id'].'" />';
		echo "<li id='blank'>&nbsp</li>\n";
            ?>
		<script>
		$(document).ready(function(){
			$('#car<?php echo $s["car_id"]; ?>').click(function(){
			$('#free_car').html('<?php echo $car_label."".$select_car; ?>');
			$('input#book').show();
			return false;
			});
		});
		</script>
<?php
                }
            }
?>
</ul>
