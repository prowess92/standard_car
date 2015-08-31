<?php
session_start(); 

	require('../scripts/defaults.php');
?>
<h3>List of Available cars</h3>
      <table style="width:100%;">
      <tr id='blank'>
	<td id="title">Make</td><td id="title">Model</td><td id="title">Registration</td><td id="title">Year</td><td id="title">Ownership</td><td id="title">&nbsp;</td>
      </tr>	
      <?php
	$connect = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die('cant connect to mysql: '.mysql_error());
$db = mysql_select_db(DB_NAME, $connect) or die('cant select database: '.mysql_error());
	
	$q="SELECT * FROM `cars` ORDER BY make ";
	$r=mysql_query($q,$connect);
	while($s=mysql_fetch_array($r)){ 
		echo "<tr>";
		echo "<td>".$s['make']."</td>";
		echo "<td>".$s['model']."</td>";
		echo "<td>".$s['reg_num']."</td>";
		echo "<td>".$s['year']."</td>";
		if ($s['ownership'] == 'bank_owned'){
			echo "<td>bank</td>";
		}else{
			echo "<td>".$s['ownership']."</td>";
		}
		
		if ($_SESSION['privileges'] == "admin"){
		echo "<td><a href='../scripts/delete_cars.php?cars_id=".$s['cars_id']."'>delete</a></td>";
		}else{
		echo '<td>&nbsp;</td>';
		}
		echo "</tr>";  
		echo "<tr id='blank' ><td colspan='4'>&nbsp</td></tr>";           	
	}	 
 ?>
</table>
