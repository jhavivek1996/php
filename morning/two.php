<?php
include 'db.php';

if(isset($_REQUEST['update']))
{
	$column1=$_REQUEST['column1'];
	$column2=$_REQUEST['column2'];

	 $update="UPDATE travel SET column1='$column1',column2='$column2' WHERE id=".$_REQUEST['edit'];

	$updater=mysqli_query($con,$update);
	if($updater)
	{
		echo "Feat";
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
			<tr>
				<th>First</th>
				<th>Second</th>
				<th>Third</th>
			</tr>
			<?php 
				$id=$_REQUEST['edit'];
				 $select="SELECT * FROM travel WHERE id=".$id;
			
				$res=mysqli_query($con,$select);
				$row=mysqli_fetch_array($res);
				
						
			?>			
			<tr>
				<td>Name:&nbsp;<input type="text" name="column1" value="<?php echo $row['column1'];?>"></td>
				<td>Age:&nbsp;<input type="text" name="column2" value="<?php echo $row['column2'];?>"></td>
				<td><input type="submit" name="update" class=btn btn-warning"></td>
			</tr>
		</table>
		
	</form>

</body>
</html>