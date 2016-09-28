

<?php include("common/conn.php") ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

	<style>
		#formbody{padding:40px; margin: 40px;text-align: center; border: 1px solid; color:black;}
	</style>
</head>
<body>
	<div id="formbody">
		This is  Registration Page<br><br><br>
		<form action="common/reg_form.php" method="POST">
			User Name:  <input type="text" name="user_name" placeholder="User Name" required ><br><br>
			Email:  <input type="text" name="email" placeholder="Email "><br><br>
			Password:  <input type="password" name="password" placeholder="Password" required><br><br>
			<input type="submit" value="Registration"> <br><br><br>
		</form>
	</div>
	<a href="home.php"> Go Back to home Page</a>
</body>
</html>
