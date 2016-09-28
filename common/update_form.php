<!-- NO USE  -->
<?php include_once("common/conn.php") ?>
<?php ini_set("display_errors",1) ?>


<?php

	if(isset($_GET['id'])){

		$id=$_GET['id'];
		$name=$_POST['name'];
		$email=$_POST['email'];
		$num=$_POST['num'];
		$comment=$_POST['comment'];
		$file=$_POST['file'];
		$sql="UPDATE table_info SET name=$name, email='$email', num='$num', comment='$comment', file='$file' WHERE id='$id' ";

		$update=mysqli_query ($conn,$sql);
		if($update=="TRUE")
		{
			$success=" profile Update successfully..";
			
		}
		else { $error="profile Update errors.. ";}

		

	}
?>