<?php
include 'db.php';
if(isset($_POST['login']))
{
	$mail=$_POST['mail'];
	$pass=$_POST['pass'];
 	
	$insert="INSERT INTO login(mail,pass)VALUES('$mail','$pass')";
	$insertion=mysqli_query($con,$insert);
	if($insertion)
	{
	echo "Logged in Successfully";
	}
	else
	{
	echo "Wrong Credentials";
	}
}
?>



<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<title>Login Page</title>
</head>
<body>
	<form method="POST">
		<table class="table table-bordered">
			<tr>
				<th>Name:</th>
				<th>Password</th>
				<th>&nbsp;</th>
				<th>New User</th>
			</tr>

			<tr>
				<td><input type="text" name="mail"></td>
				<td><input type="password" name="pass"></td>
				<td><input type="submit" name="login" class=btn btn-warning"></td>
				<td><button onclick="redirect()" class="btn btn-success">Sign-up</button>

					<script>
					function redirect() {
					    window.open("registration.php");
					}
					</script>
			</tr>
		</table>
		<?php
			/*$select="SELECT * FROM login";
			$selection=mysqli_query($con,$select);
			while($row=mysqli_fetch_array($selection))
{  ?><table>
			<tr><td><?php echo $row['mail'];?></td>
	  	    <td><?php  $row['pass'];?></td></tr>
	     	 <td><a href="login.php?delete=<?php echo $row['id'];?>">Delete</a></td>
	      	<td><a href="newlogin.php?edit=<?php echo $row['id'];?>">Edit</a></td></tr></table>
	      	<?php


		 
		}
		*/?>
		
	</form>

</body>

	</table>

</body>
</html>


<?php

if (isset($_REQUEST['delete']))
 {
	$delete="DELETE FROM login WHERE id=".$_REQUEST['delete'];
	$rows=mysqli_query($con,$delete);
	if ($rows)

	{
		echo "<h1>Deleted</h1>";
	}
	else
	{
		echo "Not Deleted";
	}
}
?>

