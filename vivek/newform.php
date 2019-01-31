<?php
include 'db.php';

if (isset($_POST['save'])) 
{
	$first=$_POST['first'];
	$last=$_POST['last'];
	$gender=$_POST['gender'];
	$fl=$_POST['fl'];
	$address=$_POST['address'];
	$city=$_POST['city'];
	$birthday=$_POST['birthday'];

	$SQL="INSERT INTO jha
	(first,last,gender,fl,address,city,birthday) VALUES
	('$first','$last','$gender','$fl',$address','$city','$birthday')";

	 if (mysqli_query($con,$SQL))
	 {

	 	echo "Done";
	 
	 }
	 else
	 {
	 	echo "Not Done";

	 }
}

?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<title>PHP with BootStrap</title>
</head>
<body>
	<div class="container-fluid">
		<div class="jumbotron">
			<form method="POST" action="">
				<table>
					<th>
				<tr>￼<td>First Name:<input type="text" name="first"></td>
				<td>Last Name:<input type="text" name="last"></td></th></tr>

				<tr><td>Gender:
					<input type="radio" name="gender" value="male" checked> Male
 				 <input type="radio" name="gender" value="female"> Female
  				 <input type="radio" name="gender" value="other"> Other </td></tr>


				
				<tr><td>Favourite Language:</td></tr>
				<tr><td><input type="checkbox" name="fl" value="python">Python<br>
 				<input type="checkbox" name="fl" value="Java">java<br>
 				<input type="checkbox" name="fl" value="PHP" checked>php<br>
 				<input type="checkbox" name="fl" value="javaScript">JavaScript</td></tr>
				
				<tr><td>Address:<td></tr>
				<tr><td><input type="textarea" name="address" style="height: 80px;width :500px;"></td></tr>
				</table>


				<tr><td><div class="form-group">
		      <label>City</label>
		      <select class="form-control" id="cit" name='city'>
		        <option value='Vadodara'>Vadodara</option>
		        <option value='Surat'>Surat</option>
		        <option value='Valsad'>Valsad</option>
		        <option value='Mumbai'>Mumbai</option>
		      </select>
		      <br>
		       </div></td></tr>
		        <tr><td>Birthday:<td></tr>
		        <tr><td><input type="date" name="birthday"></td></tr><br>
		        <tr><td><input type="submit" name="save" class="btn btn-success"></td></tr>       	
			</form>
		</div>
	</div>s



</style>
</body>
</html>
