<?php
include 'db.php';


//inserting

if(isset($_REQUEST['submit']))
{
	$box1=$_REQUEST['box1'];
	$box2=$_REQUEST['box2'];
	$insert="INSERT INTO name(box1,box2) values('$box1','$box2')";
	$insertion=mysqli_query($con,$insert);
	if($insertion) 
	{
		echo "Yes";
	}
	else
	{
		echo "No";
	}


}

//Selecting a query
$select="SELECT * FROM comp";
$selected=mysqli_query($con,$select);
while($row=mysqli_fetch_array($selected))
{
	?><tr><td><?php echo $row['box1'];?></td>
		  <td><?php echo $row['box2'];?></td></tr>
<?php
}
?>




<!DOCTYPE html>
<html>
<head>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<title>Project</title>
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
