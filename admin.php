<!-- NOT USE -->
<?php ini_set('display_errors',1);?>
<?php include("common/conn.php") ?>
<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
</head>

<body>
	<table border="1">
		<thead>
			<tr>
				<th>NO</th>
				<th> Picture </th>
			</tr>
		</thead>

		<tbody>

			<?php
	
			$result=mysqli_query($conn,"SELECT * FROM image_table");

			while($row=mysqli_fetch_assoc($result))
				
			{
				?>
				<tr>
					  
					  <td><?=$row["id"]?></td>
					  <td><a href="../<?php echo $row['file'] ?>" target="_blank">view file</a></td>

				</tr>

			<?php 
			}
			?>
		</tbody>
	</body>
	</html>
