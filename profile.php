<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="maincss/bodycss.css">
</head>
<body>
    <div id="body">
        <h3>This is Profile Page </h3>
        <form action="../common/profile_form.php" method="POST" enctype="multipart/form-data">
            Name <input type="text" name="name" placeholder="Your name"><br><br>
        	Email <input type="text" name="email" placeholder="your Email"><br><br>
        	Phone Number <input type="text" name="num" placeholder="Contact Number"><br><br>
        	Your Comment : <textarea cols="30" rows="5" name="comment"> </textarea> <br><br>
            Profile Picture:<input type="file" name="file"><br><br>
        	<input type="submit" value="Save profile">
        </form>
        <a href="home.php"> Go Back to home Page</a>
    </div> 
</body>
</html>