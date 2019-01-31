<!DOCTYPE html>
<html>
<head>
	<title>View</title>
</head>
<body>

	<?php
			include 'db.php';
			$select="SELECT * FROM login ;
			$selection=mysqli_query($con,$select);
			while($row=mysqli_fetch_array($selection))
{  ?><table>
			<tr><td><?php echo $row['mail'];?></td>
	  	    <td><?php  $row['pass'];?></td></tr>
	     	 <td><a href="login.php?delete=<?php echo $row['id'];?>">Delete</a></td>
	      	<td><a href="newlogin.php?edit=<?php echo $row['id'];?>">Edit</a></td></tr></table>
	      	<?php


		 
		}
		?>

</body>
</html>