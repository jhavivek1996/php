<?php
if (isset($_POST['fbutton'])) 
{
	$friday1=$_POST['friday1'];
}




?>




<!DOCTYPE html>
<html>
<head>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<title>Friday Work</title>
</head>
<body>
	<form method="POST">
		<table class="table table-bordered">
			<tr>
				<th>Email:</th>
				<th>Phone no.:</th>
				<th>Submit</th>
			</tr>
			<tr>
				<td><input type="text" name="friday1"></td>
				<td><input type="text" name="friday2"></td>
				<td><input type="submit" name="fbutton" class="btn btn-danger"></td>
			</tr>

		</table>
	</form>
</body>
</html>