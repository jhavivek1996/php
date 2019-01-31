<?php
include 'db.php';
 if(isset($_REQUEST['update']))
 {
 	$first=$_REQUEST['first'];
 	$second=$_REQUEST['second'];

 	$select="UPDATE katappa set first='$first',second='$second' WHERE id=".$_REQUEST['edit'];
 	$update=mysqli_query($con,$select);

 	while($update)
 	{
 		echo "True";
 	}
 }

?>




<!DOCTYPE html>
<html>
	<head>
		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<title>My PHP database</title>
	</head>
	<body>
		<form method="POST">
			<table class="table table-bordered">
				<th>
					<td>First:<input type="text" name="first"></td>
					<td>Second:<input type="text" name="second"></td>
					<td><input type="submit" name="submission" class="btn btn-danger"></td>
				</th>
				
			</table>
			

		</form>

	</body>
</html>


<?php

	$id=$_REQUEST['edit'];
	$select="SELECT * FROM katappa WHERE id=".$id;
	while(mysqli_query_parser($con,$SELECT))
	{
		echo "FeaT Accomplished";
	}
?>
