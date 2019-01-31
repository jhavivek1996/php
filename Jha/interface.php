<?php
include 'db.php';

if (isset($_POST['save']))
{
	$vivek=$_POST['vivek'];
	$jha=$_POST['jha'];

	$insert="INSERT INTO bahubali (`vivek`,`jha`) VALUES('$vivek','$jha')";

	#$vivek=mysqli_query($con, $insert);
	if (mysqli_query($con, $insert))
	 {
		echo "done";
	}
	else
	{
		echo "not done";
	}
}
?>
<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<title>My First Page</title>
</head>
<body>
		<form method="POST">
		First Name:	<input type="text" name="vivek"><br>
		Last Name: <input type="text" name="jha"><br>
		<input type="submit" name "save" class="btn btn-warning">	
		</form>
</body>
</html>