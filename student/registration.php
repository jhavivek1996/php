<?php
include 'db.php';

if(isset($_POST['register']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$password=$_POST['password'];
	$confirm=$_POST['confirm'];
 	
	$insert="INSERT INTO registration(name,email,phone,password,confirm) VALUES('$name','$email','$phone','$password',$confirm)";
	$insertion=mysqli_query($con,$insert);
	if($insertion=True)
	{
	echo "<script>window.location='login.php'</script>";
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
	<title>Registration</title>
</head>
<body><form method="POST" class="jumbotron">
		<table class="table table-bordered">
			<tr>
		<td>Name:<input type="text" name="name" required></td>
		<td>Email:<input type="email" name="email" required></td>
		<td>Phone :<input type="text" name="phone" required></td>
		<td>Password:<input type="password" name="password" required>
		<td>Confirm Password:<input type="password" name="confirm" required>
		<td><input type="submit" name="register" required></td>
		<td><button onclick="redirect()" class="btn btn-success">Login</button></td><tr>

					
		</table>
	  </form>
	  <script>
					function redirect() {
					    window.open("login.php");
					}</script>

</body>
</html>