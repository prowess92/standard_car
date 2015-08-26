<?php
 ob_start();
session_start();
if(isset($_SESSION['username'])&&isset($_SESSION['privileges'])){
$resource_id= $_GET['resource_id'];

if (isset($_GET['resource_id'])&& is_numeric($_GET['resource_id'])){
require('defaults.php');
//database connection 
 $connect = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die('cant connect to mysql: '.mysql_error());
$db = mysql_select_db(DB_NAME, $connect) or die('cant select database: '.mysql_error());
 
$q="SELECT `resource_pdf` FROM `resource` WHERE `resource_id`='$resource_id'";
$r=mysql_query($q,$connect);
$s=mysql_fetch_array($r);
$delete_resource="../manuals/".$s['resource_pdf'];

unlink($delete_resource);

$query="DELETE FROM `resource` WHERE `resource_id`='$resource_id'";
mysql_query($query,$connect);

header('location:../app/show_resource_view.php');
}}
?>