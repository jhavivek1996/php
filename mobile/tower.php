<?php
include 'db.php';

//Inserting a query             C_/   R_/   U   D_/
if (isset($_POST['submit']))
{
	$box1=$_POST['box1'];
	$box2=$_POST['box2'];

	$insert="INSERT INTO phone(box1,box2) VALUES('$box1','$box2')";
	$insertion=mysqli_query($con,$insert);
	if ($insertion)
	{
		echo "You have Done";
	}
	else
	{
		echo "Not done";
	}
}


//selecting a query

$select="SELECT * FROM phone";
$selection=mysqli_query($con,$select);
while($row=mysqli_fetch_array($selection))
{	
	?><tr><td><?php echo $row['box1'];?></td><br>
		  <td><?php echo $row['box2'];?></td>
		 <td> <a href="tower.php?delete=<?php echo $row['id'];?>">Delete</a></td>
		 <td> <a href="cell.php?update=<?php echo $row['id'];?>">Delete</a></td>
	  </tr>
<?php

}

//deleting a query
$delete=$_REQUEST['delete'];

if (isset($delete)) {
	
$deleted="DELETE FROM phone WHERE id=".$delete;
$deletion=mysqli_query($con,$deleted);
if ($deletion=TRUE) 
{
	echo "Rock";
}
else
{
	echo "Not Rock";
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
