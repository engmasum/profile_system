<?php include("../common/conn.php") ?>
<?php ini_set('display_errors',1);?>
<?php
	$user_name=$_POST['user_name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$result=mysqli_query($conn,"INSERT INTO `assignment`.`registration` (`user_name`, `email`, `password`) VALUES ('$user_name', '$email', '$password')");	
	if($result=="TRUE") {
		echo"Thank You"." " . $user_name." ". "for  Registration";
	}
 else { echo"Registration Error ..";}
?>

