
<?php
include 'db.php';

if(isset($_REQUEST['update']))
{
	$mail=$_REQUEST['mail'];
	$pass=$_REQUEST['pass'];
    
	$update="UPDATE login  SET mail='$mail',pass='$pass' WHERE id=".$_REQUEST['edit'];

	$updater=mysqli_query($con,$update);
	if($updater)
	{
		echo "Done Done";
	} 
	else
	{
		echo "Not Done";
	}
}
?>
?<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<title>Login Page</title>
</head>
<body>
	<form method="POST">
		<table class="table table-bordered">
			<tr>
				<th>Name</th>
				<th>Password</th>
				<th>&nbsp;</th>
			</tr>
			<?php 
				$id=$_REQUEST['edit'];
				 $select="SELECT * FROM login WHERE id=".$id;
			
				$res=mysqli_query($con,$select);
				$row=mysqli_fetch_array($res);
				
				?>

			<tr>
				<td><input type="text" name="mail" value="<?php echo $row['mail'];?>"></td>
				<td><input type="password" name="pass" value="<?php echo $row['mail'];?>"></td>
				<td><input type="submit" name="login" class=btn btn-warning"></td>
			</tr>
		</table>