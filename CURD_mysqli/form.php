<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<title>First PHP</title>
</head>
<body>
	<div class="container">
		<div class="jumbotron">
	<form method="POST" action="crud1.php">
		<kbd>First Name:</kbd> <input type="text" name="first" value="<?php if(isset($_GET['edit'])) 
		echo $getROW['first'];?>" id="1"><br><br>

		<kbd>Last Name:</kbd> <input type="text" name="last" value="<?php if(isset($_GET['edit']))
		echo $getROW['last'];?>" id="2"><br>
		<input type="submit" class="btn btn-success" name="save">
		
	</form>

</div>
</div>
<?php
if(isset($_GET['edit']))
{
	?>
	<input type="submit" class="btn btn-success" name="update">update</input>

	<?php
	?>
else
{
	?>
	<input type="submit" class="btn btn-success" name="Save">Save</input>
	<?php

}
?>


<table width="100%" border="1" cellpadding="15" align="center">
	<?php
include_once 'crud1.php';
?>

<?php
$res = $MySQLiconn->query("SELECT * FROM Name");
while($row=$res->fetch_array())
{
	?>
    <tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['first']; ?></td>
    <td><?php echo $row['last']; ?></td>
    <td><a href="?edit=<?php echo $row['id']; ?>" onclick="return confirm('sure to edit !'); " >edit</a></td>
    <td><a href="?del=<?php echo $row['id']; ?>" onclick="return confirm('sure to delete !'); " >delete</a></td>
    </tr>
    <?php
}
?>
</table>

</body>
</html>