<?php
include "db.php";
//Inserting a query
if (isset($_POST['subtle']))
{ 
	$ins=$_POST['ins'];
	$mcwc=$_POST['mcwc'];

    $insert="INSERT INTO dictator(ins,mcwc) VALUES('$ins','$mcwc')";
	$insertion=mysqli_query($con,$insert);
	if($insertion)
	{
		echo "Insert";

	}
	else

	{
		echo "Not Inserted";
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
			<table class="table table-bordered" border="1">
				<tr>
					<th>Insertion:<input type="text" name="ins"></th>
					<th>Deletion:<input type="text" name="mcwc"></th>
					<th><input type="submit" name="subtle" class="btn btn-danger"></th>
				</tr>
				
			</table>
			

		</form>

		<table>
	<?php
//selecting a query
$select="SELECT * FROM dictator";
$selection=mysqli_query($con,$select);

while($row=mysqli_fetch_array($selection)) 
{
	?>
		<table border="1" align="Center" class="ta" class="container-fluid" class="jumbotron">
		<tr><td><?php echo $row['ins'];?></td>
			<td><?php echo $row['mcwc'];?></td>
		<td><a href="first.php?delete=<?php echo $row['id'];?>">Delete</a></td>
		<td><a href="second.php?edit=<?php echo $row['id'];?>">Edit</a></td>
		</tr>
		</table>

	
	<?php
}




?>

</table>


	</body>
</html>


<?php

if (isset($_REQUEST['delete']))
 {
	$delete="DELETE FROM dictator WHERE id=".$_REQUEST['delete'];
	$rows=mysqli_query($con,$delete);
	
	if ($rows)
	{
		echo "True";		

	}
	else
	{
		echo "False";
	}
}
?>