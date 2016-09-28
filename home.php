<?php session_start()?>
<!DOCTYPE html>
<html>
<head>
	<title> assignmet </title>
	<link rel="stylesheet" type="text/css" href="maincss/bodycss.css">
</head>
<body>
<div id="body">
 UserID: <?=$_SESSION["user_id"]?><br> 
 User Name:<?=$_SESSION["user_name"]?><br>

  
  <br> <a href="index.php"> Login </a> 
  <br> <a href="profile.php"> Add Profile </a> 
  <br> <a href=""> Profile Update </a> 
  <br> <a href="admin.php"> Admin Login </a> 
  <br> <a href="member.php"> Member List  </a>
  <?php 
    //if($_SESSION['user_id']<>"") when login that time only show the logout page 
    if($_SESSION['user_name']<>"")
    {
  ?> 
  <br> <a href="logout.php"> Logout </a>
  <?php } ?>
</div>
</body>
</html>