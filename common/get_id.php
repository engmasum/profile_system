<!-- NO USE to get ID for UPDATE  -->
<?php session_start(); ?>
<?php include("common/conn.php") ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="maincss/bodycss.css">

</head>
<?php  
//echo"SELECT * FROM profile_info WHERE user_id='".$_SESSION['user_id']."'";

  $sql="SELECT * FROM profile_info WHERE id='".$_SESSION['user_id']."'";
   $result= mysqli_query($conn,$sql);
   while($row=mysqli_fetch_array($result)){
   
?>

<body>
<div id="body">
    <h3>This is Profile Page </h3>
    <form action="../common/profile_form.php" method="POST" enctype="multipart/form-data">
        Name <input type="text" name="name" placeholder="Your name" value="<?=$row['name']?>"><br><br>
    	Email <input type="text" name="email" placeholder="your Email" value="<?=$row['id']?>"><br><br>
    	Phone Number <input type="text" name="num" placeholder="Contact Number" value="<?=$row['num']?>"><br><br>
    	Your Comment : <textarea cols="30" rows="5" name="comment"value="<?=$row['comment']?>"> </textarea> <br><br>

        
    	Profile Picture:<input type="file" name="file"value="<?=$row['file']?>"><br><br>
    	<input type="submit" value="Save profile">
 
    </form>
</div> 
</body>
</html>
<?php } ?>