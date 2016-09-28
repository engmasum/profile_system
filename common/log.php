 <?php session_start();?>
 <?php include("../common/conn.php") ?>
 <?php ini_set('display_errors',1);?>
<?php
	$user_name=$_POST['user_name'];
	//$email=$_POST['email'];
	$password=$_POST['password'];
$sel_user="SELECT * FROM registration WHERE  user_name='$user_name' AND  password='$password' ";
$run_user=mysqli_query($conn,$sel_user);
$check_user=mysqli_num_rows($run_user);
//echo$check_user;
if($check_user>0){
	while($row=mysqli_fetch_array($run_user)){
		$_SESSION['user_id']=$row['id'];
		$_SESSION['user_name']=$row['user_name'];
		}
   ?><script type="text/javascript">window.location = "/home.php"</script><?
     }
else{ echo"UserName  or password is not correct"; }
?>

