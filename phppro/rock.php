<?php
include 'db.php';

if (isset($_POST['submission']))
{
	$first=$_POST['first'];
	$second=$_POST['second'];

	$insert="INSERT INTO katappa (first,second) VALUES('$first','$second')";
	$res=mysqli_query($con, $insert);
	
	if ($res)
	 {
	 	echo "It Works";

	 } 
	 else
	 {
	 	echo "Failed";
	 }		

}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Professional Work</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

</head>
<body>
	<div class="container">
		<div class="jumbotron text-center">
			<form method="POST">
				<table class="table table-bordered">
				<th>Name : <input type="text" name="first"><br></th>
				
				<th>age  : <input type="text" name="second"></br></th>
				<th>       <input type="submit" name="submission" class="btn btn-danger"></th>
				</table>	   
				

				<table>
					<?php
					$select="SELECT * FROM katappa";
				    $rest=mysqli_query($con,$select);

				    while($row=mysqli_fetch_array($rest))
				    {
				    ?>
						<th><td><?php echo $row ['first'];?></td>
							<th><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td></th>
						<th><td><?php echo $row ['second'];?></td></th>
						<th><td><a href="rock.php?delete=<?php echo $row['id'];?>">Delete</a></td></th>
					<?php
					}
?>

					
				 </table>
				
				<th></th>
			</form>
		</div>
	</div>

<?php
if(isset($_REQUEST['delete']))
		
		{
			$sql="DELETE * FROM my_table WHERE id=".$_REQUEST['delete'];
			$rows=mysqli_query($con,$sql);
			{
				if($rows)
				{
					echo "Done";
				}
				else
				{
					echo "Not Done";
				}
			}
		}

 ?>


</body>
</html>