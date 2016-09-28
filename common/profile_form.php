<?php include("../common/conn.php") ?>
<?php ini_set('display_errors',1) ; ?>
<?php 
	$name=$_POST['name'];
	$email=$_POST['email'];
	$num=$_POST['num'];
	$comment=$_POST['comment'];
	$file =$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
	$folder="../uploads/";
// make file name in lower case
	$new_file_name = strtolower($file);
	$destifinal=$folder.str_replace(' ','-',$new_file_name);
	$veryfinalfile="/uploads/".str_replace(' ','-',$new_file_name);
	$final_file=str_replace(' ','-',$new_file_name);
	
	if(move_uploaded_file($file_loc,$destifinal))
	{
		$sql="INSERT INTO profile_info(name,email,num,comment,file) VALUES('$name','$email','$num','$comment','$veryfinalfile')";
		mysqli_query($conn,$sql);
		echo"Successfully...";
	}
	else
	{
		echo"Erroes..";
	}
?>
