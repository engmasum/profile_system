<?php include_once("common/conn.php") ?>
<?php ini_set("display_errors",1) ?>


<?php
		$id=$_GET['id'];
		if(isset($_POST['update'])) {
		$name=$_POST['name'];
		$email=$_POST['email'];
		$num=$_POST['num'];
		$comment=$_POST['comment'];
		$file=$_POST['file'];


		
	$file =$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
	$folder="uploads/";
	
	
	// make file name in lower case
	$new_file_name = strtolower($file);
	$destifinal=$folder.str_replace(' ','-',$new_file_name);
	$veryfinalfile="uploads/".str_replace(' ','-',$new_file_name);
	$final_file=str_replace(' ','-',$new_file_name);
	
	if(move_uploaded_file($file_loc,$destifinal))
		
	$sql="UPDATE profile_info SET name='$name', email='$email', num='$num', comment='$comment', file='$veryfinalfile' WHERE id='$id' "; 

		$update=mysqli_query ($conn,$sql);
		if($update)
		{
			$success=" profile Update successfully..";
			echo $success;
			
		}
		else { $error="profile Update errors.. "; echo$error;  }


		}

?>


<?php  

  $result=mysqli_query($conn,"SELECT * FROM profile_info WHERE id='$id' ");

   while($row=mysqli_fetch_array($result)) {

   	 $name=$row['name'];
   	 $email=$row['email'];
   	 $num=$row['num'];
   	 $comment=$row['comment'];
   	 $file=$row['file'];
   
?>
<html>
<body>
<div id="body">
    <h3>This is Profile Page </h3>
    <form action="" method="POST" enctype="multipart/form-data">
        Name: <input type="text" name="name" placeholder="Your name" value="<?=$row['name']?>" ><br><br>
    	E-mail:<input type="text" name="email" placeholder="your Email" value="<?=$row['email']?>" ><br><br>
    	Phone Number <input type="text" name="num" placeholder="Contact Number" value="<?=$row['num']?>" ><br><br>
    	Your Comment : <textarea cols="30" rows="5" name="comment" value=""><?=$row['comment']?></textarea> <br><br>

    	Profile Picture:<input type="file" name="file"value="" 
        <img src="uploads<?=$row['file']?>"> <br><br>
    	<input type="submit" value="Update profile" name="update">
 
    </form>
</div> 
</body>
</html>
<?php } ?>