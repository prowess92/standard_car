<script>
$(document).ready(function($){
$('#dist_sel').click(function(){
	$('#loc_desc').show();
        return false;
	});
});
</script>

<select id='dist_sel' name="district">
<?php 
session_start(); 

	require('../scripts/defaults.php');
    $connect = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die('cant connect to mysql: '.mysql_error());
$db = mysql_select_db(DB_NAME, $connect) or die('cant select database: '.mysql_error());
	$region_id = $_GET['region'];
	$q="SELECT * FROM `district` WHERE `region_id` = '$region_id' ORDER BY name";
	$r=mysql_query($q,$connect);
	while($s=mysql_fetch_array($r)){
        echo "<option value='".$s['district_id']."'>".$s['name']."</option>";
        }
?>
</select>
