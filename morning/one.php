<?php
include 'db.php';

if(isset($_POST['vivek']))
{
	$column1=$_POST['column1'];
	$column2=$_POST['column2'];
 	
	$insert="INSERT INTO travel(column1,column2) VALUES('$column1','$column2')";
	$insertion=mysqli_query($con,$insert);
	if($insertion=True)
	{
	echo "It works";
	}
	else
	{
	echo "Not Works";
	}
}


$select="SELECT * FROM travel";
$selection=mysqli_query($con,$select);
while($row=mysqli_fetch_array($selection))
{    ?><table>
	<tr><td><?php echo $row['column1'];?></td>
	      <td><?php echo $row['column2'];?></td></tr>
	      <td><a href="one.php?delete=<?php echo $row['id'];?>">Delete</a></td>
	      	<td><a href="two.php?edit=<?php echo $row['id'];?>">Edit</a></td></tr></table>
	      	<?php

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
			<tr>
				<th>First</th>
				<th>Second</th>
				<th>Third</th>
			</tr>

			<tr>
				<td>Name:&nbsp;<input type="text" name="column1"></td>
				<td>Age:&nbsp;<input type="text" name="column2"></td>
				<td><input type="submit" name="vivek" class=btn btn-warning"></td>
			</tr>
		</table>
		
	</form>

</body>
</html>
<?php

if (isset($_REQUEST['delete']))
 {
	$delete="DELETE FROM travel WHERE id=".$_REQUEST['delete'];
	$rows=mysqli_query($con,$delete);
	if ($rows)

	{
		echo "Done";
	}
	else
	{
		echo "Not Done";
	}
}
?>