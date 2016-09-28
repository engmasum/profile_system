 <?php ini_set('display_errors',1);?>
<?php include("common/conn.php") ?>
<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
</head>
<h2> <center> Member Liest </center></h2>
<body>
	<table border="1">
		<thead>
			<tr>
				<th>NO</th>
				<th>Name</th>
				<th> Email </th>
				<th> Contact Num</th>
				<th> Comment </th>
				<th> Picture </th>
				<th> Edit </th>
			</tr>
		</thead>

		<tbody>

			<?php
	
			$result=mysqli_query($conn,"SELECT * FROM profile_info");

			
			while($row=mysqli_fetch_array($result))
				
			{ 
			 ?>
				<tr>
					  
					  <td><?=$row["id"]?></td>
					  <td><?=$row["name"]?></td>
					  <td><?=$row["email"]?></td>
					  <td><?=$row["num"]?></td>
					  <td><?=$row["comment"]?></td>
					  <td><a href="<?=$row['file'] ?>" target="_blank"> Profile Picture </a> </td>
					  <td><a href="/update.php?id=<?=$row["id"]?>">  Edit </a></td>
					 
				</tr>

			<?php } ?>
		</tbody>
		</table>

	<!-- <a href="home.php"> Go Back to home Page</a> -->
	</body>
		
	</html>
