<?php
ini_set("display_errors","off");
$conn= mysqli_connect("localhost","root","","student");

/*
if(isset($_REQUEST['submit']))
{
	$hobby=$_REQUEST['rock'];
	$akshay=implode("/",$hobby);
	print_r($akshay);
	$insert="insert into impolde(rock) value ('$akshay')";
	$run=mysqli_query($conn,$insert);

}
*/
if(isset($_REQUEST['ok']))
{
	print_r($_POST['ok']);
	exit;
 	$hobby=$_POST['hobby'];

	$vivek=implode("/",$hobby);
	
	$insert="INSERT INTO impolde(rock) VALUES('$vivek')";
	$run=mysqli_query($conn,$insert);
	if($run)
	{
		echo "Vivek";

	}
	else
	{
		echo "Jha";
	}
}


?>
<html>
<head>
	<title>

		implode<
	</title>
</head>
<body>
	<form method="post">
		<input type="checkbox" name="rock[]" value="movies">movies
		<input type="checkbox" name="rock[]"value="dance">dance
		<input type="checkbox" name="rock[]" value="reading">reading
		<input type="submit" name="ok" value="save">
	</form>
</body>
</html>


