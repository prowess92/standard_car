<?php
session_start(); 
?>
<html>
<head>
<link href="../css/login.css" rel="stylesheet" type="text/css" />
<?php
 
if (isset($_SESSION['error'])){
	echo $_SESSION['error'];
	unset($_SESSION['error']);
	}
?>
</head>
<body>
<section id="content" style="height:260">
<form method = "POST" action = "../scripts/verify_login.php" style="height:122px;">
          <h1>SB ~ Car BOOKING LOGIN</h1>
          <input id="email" type="text" name="username" placeholder="username" />
          <input id="password" type="password" name="password" placeholder="password"/>
          <input type="submit" name="" class="submit"  value="login"/>
        </form>
</section>
</body>
</html>
