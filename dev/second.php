<?php
include 'db.php';
if (isset($_REQUEST['update'])) 
			{
				$ins=$_REQUEST['ins'];
				$mcwc=$_REQUEST['mcwc'];

			$update="UPDATE dictator SET ins='$ins',mcwc='$mcwc' WHERE id=".$_REQUEST['edit'];
			$updater=mysqli_query($con,$update);
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
		<title>My PHP database</title>
	</head>
	<body>
		<form method="post">
			<table class="table table-bordered" border="1">
				
					
					<?php 

					$id=$_REQUEST['edit'];
					$select="SELECT * FROM dictator WHERE id=".$id;
					$res=mysqli_query($con,$select);
					$row=mysqli_fetch_array($res) or die(mysqli_error($con));
					$a=$row['ins'];
					
						?>
					<tr>
					<th><input type="text" name="ins" value="<?php echo  $row['ins'];?>"></th>
					<th><input type="text" name="mcwc" value="<?php echo $row['mcwc'];?>"></th>
					<th><input type="submit" name="update" class="btn btn-danger"></th>
				</tr><?php
					

					?>
				
			</table>
		</form>	

		</body>
		</html>

		


		