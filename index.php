<!DOCTYPE html>
<!-- assignment-1 profile system  -->
<html>
<head>
	<title> assignment </title>
	<link rel="stylesheet" type="text/css" href="maincss/bodycss.css">
	<style>
		#loginbody{
		padding:40;margin: 40; text-align: center;
		}
	</style>
</head>
<body>
<div id="body">
	<form action="common/log.php" method="POST">
	This is Login Page<br><br><br><br>
	User Name: <input type="text" name="user_name" required><br><br>
	Password:  <input type="password" name="password"><br><br>
	<input type="submit" name="login" value="Login"> 
	<a href="register.php">OR Registration </a> 
</form>
</div>
</body>
</html>
