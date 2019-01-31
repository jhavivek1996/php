<?php
include 'db.php';
if(isset($_POST['save']))
{
	$first=$_POST['first'];
	$last=$_POST['last'];
	$gender=$_POST['gender'];
	$fav=$_POST['fav'];
	$address=$_POST['address'];
	$city=$_POST['city'];
	$birthday=$_POST['birthday'];


	$SQL="INSERT INTO schedule (`first`,`last`,`gender`,`fav`,`address`,`city`,`birthday`) 
	VALUES ('$first','$last','$gender','$fav','$address','$city','$birthday')";
	
	if(mysqli_query($con, $SQL))
	{
		echo "Done";
	}else{
		echo "error";
	}
}

if (isset($_GET['del']))
{
	$sql="DELETE FROM schedule WHERE id=".$_GET['del'];
	if (mysqli_query($con, $sql))
	 {
	echo "Data Deleted";
		}
	else
	{
		echo "Error";
	}

} 





$sql = "SELECT * FROM schedule";
$res=mysqli_query($con,$sql);
while($row=$res->fetch_array())
{
	?>
    <tr>
   <tr>
    <td><?php echo $row['first']; ?></td>
    <td><?php echo $row['last']; ?></td>
    <td><?php echo $row['Gender']; ?></td>
    <td><?php echo $row['fav']; ?></td>
    <td><?php echo $row['address']; ?></td>
    <td><?php echo $row['city']; ?></td>
    <td><?php echo $row['birthday']; ?></td>
    <td><a href="?del=<?php echo $row['id']; ?>" onclick="return confirm('sure to delete !'); " >delete</a></td>
    </tr>
    <?php
}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<title>PHP with BootStrap</title>
</head>
<body id='b'>
	<div class="container-fluid">
		
			<form method="POST" action="">
				<table>
					<th>
				<tr>
					<td>First Name:<input type="text" name="first"></td>
				<td>Last Name:<input type="text" name="last"></td></th></tr>

				<tr><td><input type="radio" name="gender" value="male" checked> Male
 				 <input type="radio" name="gender" value="female"> Female
  				 <input type="radio" name="gender" value="other"> Other </td></tr>


				
				<tr><td>Favourite Language:</td></tr>
				<tr><td><input type="checkbox" name="fav" value="python">Python<br>
 				<input type="checkbox" name="fav" value="Java">java<br>
 				<input type="checkbox" name="fav" value="PHP" checked>php<br>
 				<input type="checkbox" name="fav" value="javaScript">JavaScript</td></tr>
				
				<tr><td>Address:<td></tr>
				<tr><td><input type="textarea" name="address" style="height: 80px;width :500px;"></td></tr>
				</table>


				<tr><td><div class="form-group">
		      <label>City</label>
		      <select class="form-control" id="cit" name='city'>
		        <option value='city'>Vadodara</option>
		        <option value='city'>Surat</option>
		        <option value='city'>Valsad</option>
		        <option value='city'>Mumbai</option>
		      </select>
		      <br>
		       </div></td></tr>
		        <tr><td>Birthday:<td></tr>
		        <tr><td><input type="date" name="birthday"></td></tr><br>
		        <tr><td><input type="submit" name="save" class="btn btn-success"></td></tr>       	
			</form>

				<style type="text/css">
					#b {
						background-image: url('vivek.jpg');
						background-repeat: no-repeat;
						background-size: cover;
					}

				</style>



</style>
</body>
</html>