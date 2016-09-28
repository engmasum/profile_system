<?php 
	$host_name="localhost";
	$user_name="root";
	$password="1234";
	$db_name="assignment";

	$conn=mysqli_connect($host_name,$user_name,$password,$db_name);

	$db_select=mysqli_select_db($conn, $db_name);

	if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: ".mysqli_connect_error();
  }
  mysqli_select_db($conn,$db_name);
  $db="DB connected ";
  echo $db;
?>





