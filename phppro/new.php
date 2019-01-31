<?php
include 'db.php';

#inserting a query

if (isset($_POST['submission']))
{	
	$first=$_POST['first'];
	$second=$_POST['second'];


	$insert="INSERT INTO katappa(first,second) VALUES('$first','$second')";
	$res=mysqli_query($con, $insert);
	
	if($res)
	{
		//echo "Bahubali";
	}
	else
	{
		//echo "Katappa";
	}
}

#selecting a query

$select="SELECT * FROM katappa";
$rest=mysqli_query($con, $select);

while($row=mysqli_fetch_array($rest))
{
	echo $row['first'];
?> 			&  nbsp;
<?php
			echo $row['second'];
?>
	<a href="new.php?delete=<?php echo $row['id'];?>">Delete</a><br>
	<a href="dev.php?edit=<?php echo $row['id'];?>">Update</a><br>
<?php

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

if(isset($_REQUEST['delete']))
{
	$sql="DELETE FROM katappa WHERE id=".$_REQUEST['delete'];

	$row=mysqli_query($con,$sql);

	if($row)
	{
		echo "delete";
	}
	else
	{
		echo "error";
	}
}	



	


?>

