<?php session_start(); 
if(isset($_SESSION['username'])&&isset($_SESSION['privileges'])){
$username = $_SESSION['username'];
	require('../scripts/defaults.php');
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
<title>BICO MALAWI</title>
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
#main_content{overflow:auto;height:500px;}
#left-panel{position:relative;display:inline-block;width:780;}
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
#left-panel table th{text-align:left;}
#left-panel table td a{margin:0;padding:0;display:inline-block;position:relative;}
</style>
<body>

<div id="main_menu">
<div class="cssMenu">
<ul>
    <li id="plus">&nbsp;</li>
	<li style="width:40;padding:0;"><a href="../app/" style="padding:5 0 6 0;"><img src="../image/home_icon.png" alt="" width="20" height="20" /></a></li>		 
	<li><a href="#">Projects</a>
	<ul>
	    <li><a href="add_project_view.php">add project</a></li>
	    <li><a href="show_project_view.php">projects list</a></li>
	</ul>
	</li> 
    <li><a href="#">Research</a>
	<ul>
	    <li><a href="add_research_view.php">add research</a></li>
	    <li><a href="show_research_view.php">research list</a></li>
	</ul>
    </li>
    <li><a href="#">Articles</a>
	<ul>
	    <li><a href="add_article_view.php">upload article</a></li>
	    <li><a href="add_publication_view.php">upload publication</a></li>
	    <li><a href="show_articles_view.php">articles list</a></li>
	    <li><a href="show_publication_view.php">publications list</a></li>
	</ul>
    </li>
    <li><a href="#">Resources</a>
	<ul>
	    <li><a href="add_resource_view.php">upload resource</a></li>
	    <li><a href="show_resource_view.php">resources list</a></li>
	</ul>
    </li>
    <li><a href="#">Vacancies</a>
       <ul>
	    <li><a href="add_vacancy_view.php">add vacancy</a></li>
	    <li><a href="show_vacancy_view.php">vacancies list</a></li>
	</ul>
    </li>
    <li><a href="#">Reports</a>
	<ul>
	    <li><a href="add_report_view.php">upload report</a></li>
	    <li><a href="show_report_view.php">reports list</a></li>
	</ul>
    </li>	
    <li id="minus" style="width:203px">&nbsp;</li>
</ul>
</div>
</div>
<div id="content">
<div id="main_header">
<div id="logo">
	  <a id="logo_link" href="index.html"><img src="../images/bico malawi logo.png" alt="BICO MALAWI LOGO" width="140" height="90" border=""> </a>
	  </div>
<div id="header_name"><h2>B</h2><h2>I</h2><h2>C</h2><h2>O</h2><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CONTENT MANAGEMENT APP</span>
</div>
</div>
<div id="main_body">
<div id="main_content">
<div id="container1"> 
<div id="left-panel" style="width:1010;">
      <h2>List of Available Reports</h2>
      <table style="width:99%;">
      <tr id='blank'>
	<td id="title">Report title</td><td id="title">Domain</td><td id="title">Date Added</td><td id="title">&nbsp;</td>
      </tr>	
      <?php
	$connect = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die('cant connect to mysql: '.mysql_error());
$db = mysql_select_db(DB_NAME, $connect) or die('cant select database: '.mysql_error());
	
	$q="SELECT * FROM `report` ORDER BY created_at DESC ";
	$r=mysql_query($q,$connect);
	while($s=mysql_fetch_array($r)){ 
		echo "<tr>";
		echo "<td>".$s['title']."</td>";
		echo "<td>".$s['domain']."</td>";
		echo "<td>".$s['created_at']."</td>";
		echo "<td><a href='../scripts/delete_report.php?report_id=".$s['report_id']."'>delete</a></td>";
		echo "</tr>";  
		echo "<tr id='blank' ><td colspan='4'>&nbsp</td></tr>";           	
	}	 
 ?>
      </table>
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
<?php } ?>
