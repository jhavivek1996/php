<?php

$rock=array(10,9,6,7,2,4);

for ($i=0; $i< count($rock); $i++)
 {  
 	echo $rock[$i];

 	
	for ($j=0;$j<count($rock); $j++) 
	{ 
		if ($rock[$i]<$rock[$j]) 
	{
			
		
		$temp=$rock[$i];
		$rock[$i]=$rock[$j];
		$rock[$j]=$temp;
	}
	}
	

}echo "<br>";
?>
<select>
	<?php
for ($k=0; $k <6; $k++)
{ 	
	echo "<option>".$rock[$k]."</option><br>";
}
?>

<html>
<body>

<form method="post" action="sudo.php">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>


Your name :<?php echo $_POST["name"];?>

Email :<?php echo  $_POST["email"];?>
</body>
</html>

