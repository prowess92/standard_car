<?php
$current_date = date('Y').'-'.date('m').'-'.date('d');
$connect = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die('cant connect to mysql: '.mysql_error());
$db = mysql_select_db(DB_NAME, $connect) or die('cant select database: '.mysql_error());

$sql  = "SELECT booking_id FROM bookings WHERE status <> 'active' && date_use <= DATE('$current_date') && date_return >= DATE('$current_date')  ";
$query = mysql_query($sql, $connect);
while($exec=mysql_fetch_array($query)){
    $booking_id =  $exec['booking_id'];
    $a ="UPDATE bookings SET status = 'active' WHERE booking_id = '$booking_id'";
    mysql_query($a, $connect);
    }

$sql = "SELECT booking_id FROM bookings WHERE status <> 'done' && date_return < DATE('$current_date')  ";
$query = mysql_query($sql, $connect);
while($exec=mysql_fetch_array($query)){
    $booking_id =  $exec['booking_id'];
    $a ="UPDATE bookings SET status = 'done' WHERE booking_id = '$booking_id'";
    mysql_query($a, $connect);
    }

$sql = "SELECT booking_id FROM bookings WHERE status = 'done'";
$query = mysql_query($sql, $connect);
while($exec=mysql_fetch_array($query)){
        $booking_id =  $exec['booking_id'];
        $a ="UPDATE bookings_log SET  status = 'done' WHERE status <> 'done' && booking_id = '$booking_id'";
        mysql_query($a, $connect);
    }

$sql = "SELECT booking_id FROM bookings WHERE status = 'active'";
$query = mysql_query($sql, $connect);
while($exec=mysql_fetch_array($query)){
        $booking_id =  $exec['booking_id'];
        $a ="UPDATE bookings_log SET status = 'active' WHERE status <> 'active' && booking_id = '$booking_id'";
        mysql_query($a, $connect);
    }
?>