<?php

include 'db.php';
//Updating a query
if(isset($_REQUEST['update']))
{

	$first=$_REQUEST['first'];
	$second=$_REQUEST['second'];

	$updater="UPDATE katappa SET first='$first',         second='$second'   WHERE id=".$_REQUEST['edit'];
	$update=mysqli_query($con,$updater);
	if($update)
	{
		echo "update";

	}
	else
	{
		echo "error";
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
		<form method="POST" >
			<table class="table table-bordered">
				<th>
<?php
				$id=$_REQUEST['edit'];
				$select="SELECT * FROM katappa where id=".$id;
				$rest=mysqli_query($con, $select);

				while($row=mysqli_fetch_array($rest))
				{
	
					//echo $row['first'];
					//die();
				}	
?>


					<td>First:<input type="text" name="first" value="<?php echo $row['first']?>"></td>
					<td>Second:<input type="text" name="second" value="<?php echo $row['second']?>"></td>
					<td><input type="submit" name="update" class="btn btn-danger"></td>
				</th>
				
			</table>
			
		</form>

	</body>
</html>