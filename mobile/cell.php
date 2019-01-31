<?php
include 'db.php';
if(isset($_REQUEST['update']))
{
	$box1=$_REQUEST['box1'];
	$box2=$_REQUEST['box2'];

	$update="UPDATE phone SET box1='$box1', box2='$box2' WHERE id=".$id;
	$updated=mysqli_query($con,$update);
if ($updater) 
{
	
	echo "Rock";
}
else
{
	echo "Not";
}
}
?>


<!DOCTYPE html>
<html>
<head>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<title>Mobile Project</title>
</head>
<body>
	<form method="POST">
		<table class="table table-bordered">
			<?php 

					$id=$_REQUEST['edit'];
					$select="SELECT * FROM dictator WHERE id=".$id;
					$res=mysqli_query($con,$select);
					$row=mysqli_fetch_array($res) or die(mysqli_error($con));
					$a=$row['ins'];
					
						?>
			<tr>
				<th>First</th>
				<th>Second</th>
				<th>Third</th>
			</tr>

			<tr>
				<td>Name:&nbsp;<input type="text" name="box1"></td>
				<td>Age:&nbsp;<input type="text" name="box2"></td>
				<td><input type="submit" name="submit" class=btn btn-warning"></td>
			</tr>
		</table>
		
	</form>

</body>
</html>
