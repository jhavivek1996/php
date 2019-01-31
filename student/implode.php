<?php

$con=mysqli_connect("localhost","root","","student");

if(isset($_REQUEST['save']))
{

$jha=$_REQUEST['rock'];
$a=implode(",", $jha);

$insert="insert into impolde(rcok) values('$a')";
$run=mysqli_query($con,$insert);
if($run)
{
	echo"dsfkj";

}
else
{
	echo"error";
}


}




?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<title>Implode</title>
</head>
<body>
	  <label><input type="checkbox" value="rock[]">Hardcore</label>
   	  <label><input type="checkbox" value="rock[]">Doggy Style</label>
   	  <label><input type="checkbox" value="rock[]">Anal</label>
   	  <input type="submit" name="save" value="ok">
</body>
</html>