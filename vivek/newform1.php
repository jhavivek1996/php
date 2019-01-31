<?php
include 'db.php';

if(isset($_POST['save']))
{
	$first=$_POST['first'];
	$last=$_POST['last'];
	$gender=$_POST['gender'];
	$fl=$_POST['fl'];
	$address=$_POST['address'];
	$city=$_POST['city'];
	$birthday=$_POST['birthday'];

	$insert="INSERT INTO jha 
	(`first`,`last`,`gender`,`fl`,`address`,`city`,`birthday`) VALUES 
	('$first','$last','$gender','$fl','$address','$city','$birthday')";
	
	
	$vivek=mysqli_query($con, $insert);
	if($vivek)	 
	{
		echo "Query executed";
	}
	else
	{
		echo "Error";
	}
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

				



</style>
</body>
</html>